<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Plate;
use MainBundle\Form\Type\PlateForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlateController extends Controller
{
    public function plateAction($id)
    {
        $plate = $this->getDoctrine()->getRepository('MainBundle:Plate')->find($id);

        return $this->render('MainBundle:Plate:plate.html.twig', array(
            'plate' => $plate,
        ));
    }

    public function listAction()
    {
        return $this->render('MainBundle:Plate:list.html.twig', array(
            // ...
        ));
    }

    public function createAction(Request $request)
    {
        $ricetta = $this->getDoctrine()->getRepository('MainBundle:Ricetta')->find($request->get('id'));
        $user = $this->getUser();

        $plate = new Plate();
        $plate->setUser($user);
        $plate->setRicetta($ricetta);

        $form = $this->createForm(PlateForm::class, $plate);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $plate = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($plate);
            $em->flush();

            $this->addFlash(
                'notice',
                'Plate creato con successo'
            );

            return $this->redirectToRoute('main_plate', ['id' => $plate->getId()]);
        }

        return $this->render('MainBundle:Plate:create.html.twig', array(
            'form' => $form->createView(),
            'user' => $user,
            'ricetta' => $ricetta,
        ));
    }
}
