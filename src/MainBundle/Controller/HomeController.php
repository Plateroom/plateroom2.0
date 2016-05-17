<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{

    public function homeAction()
    {
        $ricette = $this->getDoctrine()->getRepository('MainBundle:Ricetta')->findAll();

        return $this->render('MainBundle:Home:home.html.twig', [
            'ricette' => $ricette,
        ]);
    }
}