<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{

    public function homeAction()
    {
        return $this->render('MainBundle:Home:home.html.twig');
    }

}