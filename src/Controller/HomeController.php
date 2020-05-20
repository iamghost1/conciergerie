<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{

    /**
     * @Route("/contact",name="contact")
     * @return Response
     */
    public function contact():Response{
        return $this->render('pages/contact.html.twig');
    }

    /**
     * @Route("/",name="home")
     * @return Response
     */
    public function index():Response{
        return $this->render('pages/home.html.twig');
    }
}

