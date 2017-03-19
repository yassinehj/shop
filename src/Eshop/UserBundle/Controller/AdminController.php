<?php

namespace Eshop\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('@EshopUser/acceuilAdmin.html.twig');
    }
}
