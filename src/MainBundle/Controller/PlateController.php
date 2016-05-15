<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlateController extends Controller
{
    public function plateAction($id)
    {
        return $this->render('MainBundle:Plate:plate.html.twig', array(
            // ...
        ));
    }

    public function listAction()
    {
        return $this->render('MainBundle:Plate:list.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('MainBundle:Plate:create.html.twig', array(
            // ...
        ));
    }

}
