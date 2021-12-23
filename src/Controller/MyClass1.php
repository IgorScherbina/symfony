<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyClass1 extends AbstractController
{
    #[Route('/MyClass1', name: 'MyClass1')]
    public function hell():Response
    {
        return $this->json(["message"=>"<br><h1>Hello from MyClass1</h1><br>"]);
    }
}