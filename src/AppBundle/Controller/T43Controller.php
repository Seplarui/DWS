<?php 

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Request;

Class T43Controller extends Controller {
	
	
	public function numberAction($number)
	{
		return new Response('<html><body>El número que hemos pasado ha sido!' .$number.'Y la URI utilizada es'.$_SERVER['REQUEST_URI'].'</body></html>');
	
	}
	
	public function textAction($text) {
		
		return new Response('<html><body>El texto pasado ha sido '.$text.' Y la URI: '.$_SERVER['REQUEST_URI'].'</body></html>');
	}
	
	public function defaultAction($page) {
		
		return new Response('<html><body>Pagina pasada ' . $page.' Y la URI: '.$_SERVER['REQUEST_URI']. '</body></html>');
	}
	
	public function formatAction($year,$_format) {
		
		$data= array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		
		if ($_format=='html') {
			
			return $this->render('T43/T43.html.twig',array('data'=>$data));
			
		}elseif ($_format=='json') {
			
		
		$response= new Response();
		$response-> setContent(json_encode($data));
		$response-> headers->set('Content-type','application/json');
		return $response;
		}
		
		
	}
	
}
