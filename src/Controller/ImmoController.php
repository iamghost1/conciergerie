<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ImmoController extends AbstractController{

    /**
     * @Route("/hotels",name="pages.hotels")
     * @return Response
     */

    public function hotels():Response{
        return $this->render('pages/hotels.html.twig');
    }

    /**
     * @Route("/chalets",name="pages.chalets")
     * @return Response
     */

    public function chalets():Response{
        return $this->render('pages/chalets.html.twig');
    }
}