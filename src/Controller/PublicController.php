<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
    #[Route('/page/{id?1}', name: 'page')]
    public function page(int $id): Response
    {
        return $this->render('public/page1.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
    #[Route('/haha', name: 'haha')]
    public function haha(): Response
    {
        return $this->render('public/haha.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('public/contact.html.twig', [
            'controller_name' => 'PublicController',
        ]);
    }
}
