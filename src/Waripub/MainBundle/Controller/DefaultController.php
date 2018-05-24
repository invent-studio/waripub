<?php

namespace Waripub\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //return $this->render('WaripubMainBundle:Default:index.html.twig');
        return $this->render('@WaripubMain/Default/index.html.twig');
    }
}
