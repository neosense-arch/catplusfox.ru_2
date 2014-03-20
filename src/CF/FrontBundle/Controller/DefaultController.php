<?php

namespace CF\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CFFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
