<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Category;
use App\Entity\Brand;
use App\Entity\Product;

class ProductController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/create-product', name:'create_product')]
    public function createProduct(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Dogs');
        $product->setDescription('logitech');
        $product->setPrice(22.33);
        $product->setStockQantity(100);

        $brand = new Brand();
        $brand->setName('Rets House');
        $brand->setDescription('logitech');

        $category = new Category();
        $category->setName('Rats');
        $category->setDescription('Ergonomic and stylish!');

        $product->setBrand($brand);
        $product->setCategory($category);

        $entityManager->persist($brand);
        $entityManager->persist($category);
        $entityManager->persist($product);

        $entityManager->flush();
        return new Response('Saved new product with id '.$product->getId());
    }

    #[Route('/product/{id}', name:'product_show')]
    public function show(int $id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->findOneByIdJoinedToCategoryAndBrand($id);

        dump($product);

        if (!$product) {
            throw $this->createNotFoundException('Not founds product id='.$id);
        }

        return new Response('product has name = '.$product->getCategory()->getName());

//        return new Response(dump($product));

//        return $this->render('product/index.html.twig', [
//            'controller_name' => 'ProductController',
//        ]);
    }
}
