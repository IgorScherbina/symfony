<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyClassDev extends AbstractController
{
    #[Route('/MyClassDev', name: 'MyClassDev')]
    public function hello(): Response
    {
        return $this->json(["message"=>"<h1>Hello from MyClassDev controller</h1>"]);
    }

}