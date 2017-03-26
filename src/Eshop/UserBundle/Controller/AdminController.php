<?php

namespace Eshop\UserBundle\Controller;

use Eshop\UserBundle\Entity\Categorie;
use Eshop\UserBundle\Entity\SousCategorie;
use Eshop\UserBundle\Form\CategorieType;
use Eshop\UserBundle\Form\SousCategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function acceuilAction()
    {
        return $this->render('@EshopUser/Admin/acceuilAdmin.html.twig');
    }

//    categories
    public function affichCategorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EshopUserBundle:Categorie')->findAll();
        return $this->render('@EshopUser/Admin/gestionCategorie/afficherCategorie.html.twig', array('categories' => $categories));

    }

    public function ajoutCategorieAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('eshop_user_admin_list_categorie');
        }
        return $this->render('@EshopUser/Admin/gestionCategorie/ajoutCategorie.html.twig',
            array('form' => $form->createView()));
    }

    public function supprimerCategorieAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('EshopUserBundle:Categorie')->findOneBy(array('id' => $id));
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('eshop_user_admin_list_categorie');
    }

    public function modifierCategorieAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('EshopUserBundle:Categorie')->findOneBy(array('id' => $request->get('id')));
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('eshop_user_admin_list_categorie');
        }
        return $this->render('@EshopUser/Admin/gestionCategorie/modifierCategorie.html.twig',
            array('form' => $form->createView()));
    }

//    sous categorie
    public function affichSousCategorieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Souscategories = $em->getRepository('EshopUserBundle:SousCategorie')->findAll();
        return $this->render('@EshopUser/Admin/gestionSousCategorie/afficherSousCategorie.html.twig', array('Souscategories' => $Souscategories));

    }

    public function ajoutSousCategorieAction(Request $request)
    {
        $Souscategorie = new SousCategorie();
        $form = $this->createForm(SousCategorieType::class, $Souscategorie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Souscategorie);
            $em->flush();
            return $this->redirectToRoute('eshop_user_admin_list_Souscategorie');
        }
        return $this->render('@EshopUser/Admin/gestionSousCategorie/ajoutSousCategorie.html.twig',
            array('form' => $form->createView()));
    }

    public function supprimerSousCategorieAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $Souscategorie = $em->getRepository('EshopUserBundle:SousCategorie')->findOneBy(array('id' => $id));
        $em->remove($Souscategorie);
        $em->flush();
        return $this->redirectToRoute('eshop_user_admin_list_Souscategorie');
    }

    public function modifierSousCategorieAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Souscategorie = $em->getRepository('EshopUserBundle:SousCategorie')->findOneBy(array('id' => $request->get('id')));
        $form = $this->createForm(SousCategorieType::class, $Souscategorie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Souscategorie);
            $em->flush();
            return $this->redirectToRoute('eshop_user_admin_list_Souscategorie');
        }
        return $this->render('@EshopUser/Admin/gestionSousCategorie/modifierSousCategorie.html.twig',
            array('form' => $form->createView()));
    }

}
