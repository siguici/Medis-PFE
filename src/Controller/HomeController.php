<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $products = [
            [
                'name' => 'Fancy Product',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => 'Special Item',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
            [
                'name' => '',
                'image' => 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
                'price_min' => 0,
                'price_max' => 0,
                'price_through' => 0,
                'sale' => null,
            ],
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'products' => $products,
        ]);
    }
}
