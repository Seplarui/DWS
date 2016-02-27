<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

Class T42Controller extends Controller {
	
	/**
	 *@Route("/{pages}", name="pages")
	*/
	
	public function indexAction($pages) {
		
		if ($pages=='T42') {
			
			return $this->render('T42/T42.html.twig', array('pages'=>'T42'));
		} else  {
			return new Response('<html><body>PAGINA NO ENCONTRADA</body></html>');
			
		}
	}
		
		/**
		 * @route ("/T42/{about}", name="about")
		 */
		
		public function aboutAction($about) {
			
			if($about=='about') {
				return $this->render('T42/T42.html.twig', array('pages'=>'about'));
			} 
					
		}
		/**
		 * @route("/T42/{contact}/", name="contact")
		 */
		
		 public function contactAction($contact) {
			if ($contact=='contact'){
				return $this->render('T42/T42.html.twig', array('pages'=>'contact'));
			}
		}
		
		
		
		
	}
	
	
	
	
	
	




