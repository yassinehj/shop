<?php

namespace Eshop\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class templateController extends Controller
{
    public function menuCategorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();
        return $this->render('::menu.html.twig', array('categories' => $categories));
    }
}
