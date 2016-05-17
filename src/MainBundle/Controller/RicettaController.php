<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MainBundle\Entity\Ricetta;
use MainBundle\Entity\User;
use MainBundle\Entity\Citta;
use MainBundle\Form\Type\RicettaForm;
use FrontBundle\Form\Type\RicettaFormEdit;
use FOS\UserBundle\Doctrine\UserManager;

class RicettaController extends Controller
{
    public function listAction(Request $request)
    {

      $ricetta = $this->getDoctrine()->getRepository('MainBundle:Ricetta')->findAll();

        return $this->render('MainBundle:Ricetta:lista_ricette.html.twig', array(
            'ricette' => $ricetta,
        ));
    }

    public function ricettaAction(Request $request)
    {

      $user = $this->getDoctrine()->getRepository('MainBundle:Ricetta');

      $ricetta = $this->getDoctrine()->getRepository('MainBundle:Ricetta')->find($request->get('id'));

      return $this->render('MainBundle:Ricetta:ricetta.html.twig', array(
        'ricetta' => $ricetta,
        'user' => $user,
      ));
    }

    public function createAction(Request $request)
    {

        $ricetta = new Ricetta();

        $ricetta->setUser($this->getUser());

        $form = $this->createForm(RicettaForm::class, $ricetta);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($ricetta);
            $em->flush();

            // $plate = new Plate();
            // $plate->setUser($this->getUser());
            // $plate->setRicetta($ricetta);
            // $plate->setCitta($data->get('citta'));
            // $em->persist($plate);
            // $em->flush();

            $this->addFlash(
                'notice',
                'Ricetta creata con successo'
            );

            return $this->redirectToRoute('main_ricetta', ['id' => $ricetta->getId()]);
        }

        return $this->render('MainBundle:Ricetta:crea_ricetta.html.twig', array(
            'form' => $form->createView(),
            'ricetta'=> $ricetta,
        ));
    }

    public function editAction()
    {

        $ricetta = $this->getDoctrine()->getRepository('MainBundle:Ricetta')->find($request->get('id'));
      if (!$ricetta) {
          throw new NotFoundHttpException();
      }
      $form = $this->createForm(RicettaFormEdit::class, $ricetta);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          // Salvo cose.
          $ricetta = $form->getData();
          $em = $this->getDoctrine()->getManager();
          $em->persist($ricetta);
          $em->flush();
          $this->addFlash(
              'notice',
              'Ricetta modificata con successo'
          );
          return $this->redirectToRoute('main_ricetta', ['id' => $ricetta->getId()]);
      }
        return $this->render('MainBundle:Ricetta:modifica_ricetta.html.twig', array(
            'form' => $form->createView(),
            'ricetta' => $ricetta
        ));
    }


}
