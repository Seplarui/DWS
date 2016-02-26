<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello1/{name}", name="$name")
     */
    public function helloAction($name)
    {
        // replace this example code with whatever you need
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
