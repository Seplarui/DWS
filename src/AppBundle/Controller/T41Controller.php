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


	/**
 	* @Route("/table/{number}", name="number")
 	*/

	public function tableAction($number) {

		//return new Response('<html><body>La tabla de multiplicar de '.$number.'.</body></html>');
		
		

		//return new Response('<html><body>La tabla de multiplicar de '.$tabla.'.</body></html>');
		echo "<table border=1>";
		echo "<tr>";
		echo "<th>";
		echo "La tabla del " . $number;
		echo "</th>";
		echo "</tr>";
		 
		for($i=1;$i<=10;$i++) {
			echo"<tr>";
			echo"<td>";
			 
			echo $i."*".$number."=".$i*$number;
			 
			echo"</td>";
			echo"</tr>";
		}
		echo "</table>";
		}
		
		
		
		


	}

