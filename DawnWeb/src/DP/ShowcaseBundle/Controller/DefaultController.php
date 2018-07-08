<?php

namespace DP\ShowcaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DPShowcaseBundle:Default:index.html.twig');
    }
}
