<?php

namespace Eshop\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EshopEcommerceBundle:Default:index.html.twig');
    }
    public function acceuilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();
        return $this->render('EshopEcommerceBundle:Default:acceuil.html.twig', array('categories' => $categories));
    }
}
