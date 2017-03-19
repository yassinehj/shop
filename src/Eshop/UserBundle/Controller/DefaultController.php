<?php

namespace Eshop\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EshopUserBundle:Default:index.html.twig');
    }
    public function loginAction()
    {
        return $this->render('@EshopUser/login.html.twig');
    }
}
