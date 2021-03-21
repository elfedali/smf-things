<?php

namespace App\Controller;

use App\Entity\Business;
use App\Form\Business1Type;
use App\Repository\BusinessRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/business")
 */
class BusinessController extends AbstractController
{
    /**
     * @Route("/", name="business_index", methods={"GET"})
     */
    public function index(BusinessRepository $businessRepository): Response
    {
        return $this->render('business/index.html.twig', [
            'businesses' => $businessRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="business_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $business = new Business();
        $form = $this->createForm(Business1Type::class, $business);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($business);
            $entityManager->flush();

            return $this->redirectToRoute('business_index');
        }

        return $this->render('business/new.html.twig', [
            'business' => $business,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="business_show", methods={"GET"})
     */
    public function show(Business $business): Response
    {
        return $this->render('business/show.html.twig', [
            'business' => $business,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="business_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Business $business): Response
    {
        $form = $this->createForm(Business1Type::class, $business);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('business_index');
        }

        return $this->render('business/edit.html.twig', [
            'business' => $business,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="business_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Business $business): Response
    {
        if ($this->isCsrfTokenValid('delete'.$business->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($business);
            $entityManager->flush();
        }

        return $this->redirectToRoute('business_index');
    }
}
