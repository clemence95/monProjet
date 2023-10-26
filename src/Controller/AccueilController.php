<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil', methods: ['GET'])]
    public function index(): Response
    { 
        $form = $this->createForm(ContactFormType ::class);
        return $this->render('accueil/accueil.html.twig', [
             'controller_name' => 'AccueilController',
             'form' => $form
        ]);
    }
}
