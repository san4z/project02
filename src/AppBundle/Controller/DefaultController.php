<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{


    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction()
    {
       //  return $this->render('default/index.html.twig');
       return [];

    }
    
    
    /**
     * @Route("/dashboard", name="dashboard")
     * @Template
     */
    public function dashAction()
    {
        // return $this->render('default/dash.html.twig');
     return [];

    }
}
