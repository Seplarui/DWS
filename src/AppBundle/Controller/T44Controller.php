<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

Class T44Controller extends Controller {
	
	public function staticAction($name) {
		
		if ($name=='info') {
			
			return $this->render('T44/T44info.html.twig', array('name'=>'info'));
			
		} elseif ($name=='contact') {
			
			return $this->render('T44/T44contact.html.twig',array('name'=>'contact'));
		
		} elseif ($name=='about') {
			
			return $this->render('T44/T44about.html.twig',array('name'=>'about'));
					
		}
	}
	
	
	
}
