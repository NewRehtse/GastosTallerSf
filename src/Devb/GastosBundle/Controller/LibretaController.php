<?php

namespace Devb\GastosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Devb\GastosBundle\Entity\Libreta;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class LibretaController extends Controller
{
    public function indexAction()
    {
    	$libretas = $this->getDoctrine()->getRepository("DevbGastosBundle:Libreta")->findAll();
    	
        return $this->render('DevbGastosBundle:Libretas:index.html.twig', array('libretas' => $libretas));
    }
    
    public function showAction(Request $request, $libretaid)
    {
    	$libreta = $this->getDoctrine()->getRepository("DevbGastosBundle:Libreta")->find($libretaid);
    	 
    	return $this->render('DevbGastosBundle:Libretas:show.html.twig', array('libreta' => $libreta));
    }
    
    public function addAction(Request $request) 
    {
    	$libreta = new Libreta();
        
        $form = $this->createFormBuilder($libreta)
            ->add('nombre', 'text', array(
            						'constraints'=>array(
            								new NotBlank(), 
            								new Length(array('min'=>3)
            ))))
            ->add('descripcion', 'text')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);
        
        if ($form->isValid()) {
        	$data = $form->getData();
        	
        	$em = $this->getDoctrine()->getManager();
        	$em->persist($data);
        	$em->flush();
        	
        	return $this->forward("DevbGastosBundle:Libreta:index");
        }
        
        return $this->render('DevbGastosBundle:Libretas:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
