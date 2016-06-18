<?php

namespace Acme\Bundle\WebBundle\Controller\Frontend; 

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;

class ProductController extends FOSRestController
{
    public function indexAction( Request $request)
    {
        return $this->render('AcmeWebBundle:Frontend/Product:main.html.twig');
    }
}