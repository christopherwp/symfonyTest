<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $nom =  "christopher";
        $car = [
            "model"=> "4 x 4",
            "marque" => "bugatti"
        ];
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'nomUtilisateur' => $nom,
            'voiture'=>$car

        ]);
    }
}
