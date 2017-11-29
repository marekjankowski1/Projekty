<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Movie\Movie;

class MovieController extends Controller
{

/**
 * 
 * @Route("/helloWorld/")
*/
    
public function helloWorldAction()
{
return new Response('<html><body>Hello World!</body></html>');
}

/**
 * @Route ("/createMovie/")
 * @Template("/create_movie.html.twig/")
 */

public function createMovieAction(Request $request) {
		$em = $this->getDoctrine()->getManager();

		

		$mymovie = new Movie();
		$mymovie->setTitle($request->request->get('title','?'));
                $mymovie->setYearOfProduction($request->request->get('year_of_production','?'));
                $mymovie->setDirector($request->request->get('director','?'));
                $mymovie->setGenre($request->request->get('genre','?'));
		$mymovie->setRating($request->request->get('rating',0));
		$mymovie>setDescription($request->request->get('description',''));

		

		$em = $this->getDoctrine()->getManager();
		$em->persist($mymovie);
		$em->flush();


		return $this->redirectToRoute('app_movie_showmovie',
							array( 'id' => $mymovie->getId() ));
	}
    
}
