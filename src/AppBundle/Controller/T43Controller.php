<?php 

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

Class T43Controller extends Controller {
	
	
	public function numberAction($number)
	{
		return new Response('<html><body>Hello '.$number=rand().'!</body></html>');
	
	}
	
}
