<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RicettaController extends Controller
{
    public function listAction()
    {
        return $this->render('MainBundle:Ricetta:list.html.twig', array(
            // ...
        ));
    }

    public function ricettaAction()
    {
        return $this->render('MainBundle:Ricetta:ricetta.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('MainBundle:Ricetta:create.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('MainBundle:Ricetta:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('MainBundle:Ricetta:delete.html.twig', array(
            // ...
        ));
    }

}
