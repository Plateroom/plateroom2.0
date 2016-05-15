<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function userAction()
    {
        return $this->render('MainBundle:User:user.html.twig', array(
            // ...
        ));
    }

    public function listAction()
    {
        return $this->render('MainBundle:User:list.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('MainBundle:User:create.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('MainBundle:User:edit.html.twig', array(
            // ...
        ));
    }



}
