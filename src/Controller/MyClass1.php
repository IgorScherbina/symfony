<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MyClass1 extends AbstractController
{
    public function hell():Response
    {
        return $this->json(["message"=>"<br><h1>Hello from MyClass1</h1><br>"]);
    }
}