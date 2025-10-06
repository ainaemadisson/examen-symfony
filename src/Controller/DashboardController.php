<?php

namespace App\Controller;

use App\Entity\Depot;
use App\Repository\DepotRepository;
use App\Repository\PointCollecteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(DepotRepository $depotRepository, PointCollecteRepository $pointCollecteRepository): Response
    {
        // Totaux par type de déchet
        $totauxParType = $depotRepository->getTotauxParType();
        
        // Nombre total de points de collecte
        $nombrePoints = $pointCollecteRepository->count([]);
        
        // Poids total des déchets
        $poidsTotal = $depotRepository->getPoidsTotal();
        
        // Derniers dépôts
        $derniersDepots = $depotRepository->findBy([], ['date' => 'DESC'], 10);

        return $this->render('dashboard/index.html.twig', [
            'totauxParType' => $totauxParType,
            'nombrePoints' => $nombrePoints,
            'poidsTotal' => $poidsTotal,
            'derniersDepots' => $derniersDepots,
        ]);
    }
}