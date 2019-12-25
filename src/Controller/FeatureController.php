<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FeatureController extends AbstractController
{
    /**
     * @Route("/features", name="features")
     */
    public function index()
    {
        return $this->render('feature/index.html.twig', [
            'controller_name' => 'FeatureController',
        ]);
    }
}
