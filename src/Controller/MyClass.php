<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MyClass
{

    public function __construct()
    {
        echo "I'am constructor";
    }

    public function index():Response
    {
        return new Response("<br><h1>Hello from controller</h1><br>");
    }
}