<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        $session = $request->getSession();
        $quantity = $request->query->get('quantity') ?: 0;
        if ($quantity) {
            $session->set('quantity', $quantity);
        }
        if(!$session->has('quantity')) {
            $session->set('quantity', $quantity);
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $productRepository->findAll(),
            'quantity' => $session->get('quantity'),
        ]);
    }
}
