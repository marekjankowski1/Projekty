<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
   /**
     * @Route("/restricted", name="restricted")
     */
    public function restrictedAction()
    {
        //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Access denied! Only Administration!');
        if ($this->isGranted('ROLE_ADMIN')) {
            return new Response('Witaj Administratorze! mozesz banowac uzytkownikow!');
            }
        else
        {
            return $this->redirectToRoute('homepage');
        }
      //  return new Response('Witaj Administratorze! mozesz banowac uzyszkodnikow!');
    }
    
    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('test.html.twig');
    }
    
    /**
     * @Route("/getdata", name="getdata")
     */
    public function getDataAction(Request $request)
    {
        // replace this example code with whatever you need
        return new Response('Pobieram dane z bazy danych: uzytkownicy i ich dane');
    }
}
