<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyClass
{
    #[Route('/test', name: 'test')]
    public function index(): Response
    {
        return new Response("<h1>Hello from controller test</h1>");
    }

}