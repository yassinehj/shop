<?php

namespace Eshop\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompteClientController extends Controller
{
    public function compteClientAction()
    {
        return $this->render('@EshopClient/clientconnecter/CompteClient.html.twig');
    }
    public function acceuilConnecterAction()
    {
        return $this->render('@EshopClient/clientconnecter/acceuilConnecter.html.twig');
    }
}
