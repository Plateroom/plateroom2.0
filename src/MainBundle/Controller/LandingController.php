<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LandingController extends Controller
{

    public function landingAction()
    {
        return $this->render('MainBundle:Landing:landing.html.twig');
    }

}