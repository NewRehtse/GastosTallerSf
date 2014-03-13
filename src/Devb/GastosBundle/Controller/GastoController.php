<?php

namespace Devb\GastosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Devb\GastosBundle\Entity\Gasto;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class GastoController extends Controller
{
   	/**
   	 * Función para añadir un gasto a una libreta
   	 * 
   	 * @param Request $request
   	 * @param unknown $libretaid libreta a la cual añadir el gasto
   	 */
    public function addAction(Request $request,$libretaid) 
    {
    	$gasto = new Gasto();
        
        $form = $this->createFormBuilder($gasto)
            ->add('concepto', 'text', array(
            			'constraints'=>array(
            				new NotBlank(), 
            				new Length(array('min'=>3)
            ))))
            ->add('cantidad', 'integer')
            ->add('lugar', 'text')
            ->add('libreta', 'hidden')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isValid()) {
        	$data = $form->getData();
        	
        	$libreta = $this->getDoctrine()->getRepository("DevbGastosBundle:Libreta")->find($libretaid);
        	$data->setLibreta($libreta);
        	
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($data);
        	$em->flush();
        	
        	return $this->forward("DevbGastosBundle:Libreta:show",array('libretaid'=>$libretaid));
        }
        
        return $this->render('DevbGastosBundle:Libretas:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
