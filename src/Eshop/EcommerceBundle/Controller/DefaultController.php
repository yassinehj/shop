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
        return $this->render('EshopEcommerceBundle:Default:acceuil.html.twig');
    }
}
