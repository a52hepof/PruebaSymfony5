<?php

namespace App\Controller;

use App\Entity\Espectaculo;
use App\Form\EspectaculoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EspectaculoController extends AbstractController
{
    /**
     * @Route("/espectaculo", name="espectaculo")
     */
    public function index(Request $request)
    {

        $show=new Espectaculo();
        $form=$this->createForm(EspectaculoFormType::class,$show);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($show);
            $em->flush();
            $this->addFlash('exito','espectaculo guardado correctamente');
            return $this->redirectToRoute('espectaculo');
        }
    /*

        else{
            $this->addFlash('fallo','espectaculo no guardado. Algo ocurrió');


        }
    */

        return $this->render('espectaculo/index.html.twig', [
            'controller_name' => 'EspectaculoController',
            'saludo'=>'aquí estamos con symfony',
            'formulario'=>$form->createView()
        ]);
    }
}
