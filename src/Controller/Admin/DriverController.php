<?php

namespace App\Controller\Admin;

use App\Entity\Driver;
use App\Form\DriverType;
use App\Repository\DriverRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/driver")
 */
class DriverController extends AbstractController
{
    /**
     * @Route("/", name="admin.driver.index", methods={"GET"})
     * @param DriverRepository $driverRepository
     * @return Response
     */
    public function index(DriverRepository $driverRepository): Response
    {
        return $this->render('admin/driver/index.html.twig', [
            'drivers' => $driverRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="driver.new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $driver = new Driver();
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($driver);
            $entityManager->flush();

            return $this->redirectToRoute('admin.driver.index');
        }

        return $this->render('admin/driver/new.html.twig', [
            'driver' => $driver,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="driver.show", methods={"GET"})
     * @param Driver $driver
     * @return Response
     */
    public function show(Driver $driver): Response
    {
        return $this->render('admin/driver/show.html.twig', [
            'driver' => $driver,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="driver.edit", methods={"GET","POST"})
     * @param Request $request
     * @param Driver $driver
     * @return Response
     */
    public function edit(Request $request, Driver $driver): Response
    {
        $form = $this->createForm(DriverType::class, $driver);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.driver.index');
        }

        return $this->render('admin/driver/edit.html.twig', [
            'driver' => $driver,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="driver.delete", methods={"DELETE"})
     * @param Request $request
     * @param Driver $driver
     * @return Response
     */
    public function delete(Request $request, Driver $driver): Response
    {
        if ($this->isCsrfTokenValid('delete'.$driver->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($driver);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin.driver.index');
    }
}
