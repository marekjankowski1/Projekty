<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Movie\Movie;


class MovieController extends Controller
{
/**    
* @Route("/test1", name="test1")
*
* 
*/
    
public function testAction($name)
    {
         return new Response ($name);
    }
    
/**
 * @Route ("/createMovie/")
 * @Method("POST")
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


/**
 * @Route("/showMovie/{id}")
 * @Template("/show_movie.html.twig/")
 */
    public function showMovieAction($id){
        $em = $this->getDoctrine()->getManager();
        $movieRepo = $em->getRepository('AppBundle:Entity\Movie');
        $myMovie = $movieRepo->findOneById($id);
        
        return['movie'=> $myMovie];
    }
    
    /**
     * @Route("/showAllMovies/")
      * @Template("/show_all_movies.html.twig/")
     */
    public function showAllMoviesAction(Request $request){
        
        $over_id = $request->request->get('over_id', 0);
        $over_rating = $request->request->get('over_rating', -1);
        $start_title = $request->request->get('start_title', '');
        
        $em = $this->getDoctrine()->getManager();
        
        $movies = $em->getRepository('AppBundle:Entity\Movie')
                ->findOrderedAndFiltered($over_id, $over_rating, $start_title);
    
        
        return['movies'=> $movies,
            'over_id' => $over_id,
            'over_rating'=> $over_rating,
            'start_title'=> $start_title];
    }
    
/**
     * @Route("/deleteMovie/{id}")
     * @Template("/delete_movie.html.twig/")
     */
    public function deleteMovieAction($id) {
            $em = $this->getDoctrine()->getManager();
            $bookRepo = $em->getRepository('AppBundle:Entity\Movie');
            //$mymovie = $movieRepo->getById($id);
            $mymovie = $movieRepo->findOneById($id);
            
            if(!$mymovie){
                return new Response ("<html><body>Nie znaleziono filmu o podanym id :(</body></html>");
            }
            
        $em->remove($mymovie);
        $em->flush();
        return [];
    }
}
