<?php

namespace Eshop\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EshopEcommerceBundle:Default:index.html.twig');
    }
    public function acceuilAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();
        return $this->render('EshopEcommerceBundle:Default:acceuil.html.twig');
    }
        public function articleBySouscategorieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $articles=$em->getRepository('EshopUserBundle:Article')->findBy(array('sousCategorie'=>$request->get('souscategorie')));
//        $em = $this->getDoctrine()->getManager();
//        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();
        return $this->render('EshopEcommerceBundle:Default:affichArticleBySousCategorie.html.twig',array('articles'=>$articles));
    }
}
