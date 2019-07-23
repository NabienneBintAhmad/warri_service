<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class WarriController extends AbstractController
{
    
    
    
    
    /**
     * @Route("/warri", name="warri")
     */
    public function index()
    {
        $data = [
            'name' => 'iPhone X',
            'price' => 1000
        ];

        return new JsonResponse($data);
    }
/*
    {
        return $this->render('warri/index.html.twig', [
            'controller_name' => 'WarriController',
        ]);
    } */
    
}
