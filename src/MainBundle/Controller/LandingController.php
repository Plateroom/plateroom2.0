<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LandingController extends Controller
{
  /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function loginAction(Request $request)
  {

     return $this->render('MainBundle:Landing:landing.html.twig', [

      ]);
}