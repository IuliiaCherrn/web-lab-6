<?php

namespace App;

use App\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController
{
    #[Route('/quote', name: 'app_quote')]
    public function index(
        QuoteRepository $quoteRepository
    ): Response
    {
        return $this->render('quote/index.html.twig',
            ['quotes' => $quoteRepository->findAll(),]);
    }
}
