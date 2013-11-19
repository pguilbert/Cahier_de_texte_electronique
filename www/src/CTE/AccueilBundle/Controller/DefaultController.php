<?php

namespace CTE\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CTEAccueilBundle:Default:index.html.twig', array('name' => $name));
    }
}
