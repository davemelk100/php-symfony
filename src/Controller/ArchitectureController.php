<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/architecture')]
class ArchitectureController extends AbstractController
{
    #[Route('', name: 'app_architecture')]
    public function index(): Response
    {
        return $this->render('architecture/index.html.twig');
    }
}
