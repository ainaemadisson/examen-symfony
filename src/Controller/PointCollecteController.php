<?php

namespace App\Controller;

use App\Entity\PointCollecte;
use App\Form\PointCollecteType;
use App\Repository\PointCollecteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/point/collecte')]
final class PointCollecteController extends AbstractController
{
    #[Route(name: 'app_point_collecte_index', methods: ['GET'])]
    public function index(PointCollecteRepository $pointCollecteRepository): Response
    {
        return $this->render('point_collecte/index.html.twig', [
            'point_collectes' => $pointCollecteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_point_collecte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pointCollecte = new PointCollecte();
        $form = $this->createForm(PointCollecteType::class, $pointCollecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pointCollecte);
            $entityManager->flush();

            return $this->redirectToRoute('app_point_collecte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('point_collecte/new.html.twig', [
            'point_collecte' => $pointCollecte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_point_collecte_show', methods: ['GET'])]
    public function show(PointCollecte $pointCollecte): Response
    {
        return $this->render('point_collecte/show.html.twig', [
            'point_collecte' => $pointCollecte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_point_collecte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PointCollecte $pointCollecte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PointCollecteType::class, $pointCollecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_point_collecte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('point_collecte/edit.html.twig', [
            'point_collecte' => $pointCollecte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_point_collecte_delete', methods: ['POST'])]
    public function delete(Request $request, PointCollecte $pointCollecte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pointCollecte->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($pointCollecte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_point_collecte_index', [], Response::HTTP_SEE_OTHER);
    }
}
