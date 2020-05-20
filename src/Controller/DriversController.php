<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DriversController extends AbstractController{


    /**
     * @Route("/drivers", name="pages.drivers")
     * @return Response
     */

    public function drivers():Response{
        return $this->render("pages/drivers.html.twig");
    }
}