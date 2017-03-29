<?php

namespace Eshop\UserBundle\Controller;

use Eshop\UserBundle\Entity\Categorie;
use Eshop\UserBundle\Entity\SousCategorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class templateController extends Controller
{
    public function menuCategorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();


        return $this->render('::menu.html.twig', array('categories'=>$categories));

    }
    public function menuSousCategorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
            $sousCategorie=$em->getRepository('EshopUserBundle:SousCategorie')->findBy(array('categorie'=>$categorie));
//        var_dump($sousCategorie);
        return $this->render('::sousMenu.html.twig', array('souscategories'=>$sousCategorie));


    }
}
