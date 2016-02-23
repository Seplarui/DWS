<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class T41Controller extends Controller
{
    /**
     * @Route("/magic/{number}", name="number")
     */
    public function magicnumberAction($number)
    {
        return new Response('<html><body>Hello '.$number=rand().'!</body></html>');
        
    }
    
    /**
     * @Route("/dow/{dia}", name="dia")
     */
    
    public function dayOfWeekAction($dia) {
    	$dow=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    	return new Response('<html><body>El día de la semana es: '.$dow[$dia].'.');
    }
}
