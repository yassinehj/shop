<?php

namespace Eshop\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EshopClientBundle:Default:index.html.twig');
    }
}
