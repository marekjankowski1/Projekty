<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Movie1Controller extends Controller
{
    
     
    
/**    
* @Route("/test2", name="test2")
*
* 
*/
    
public function testAction($name)
    {
         return new Response ($name);
    }
    
    
}
