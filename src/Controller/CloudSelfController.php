<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CloudSelfController extends AbstractController
{
    /**
     * @Route("/cloud-vs-self-host", name="cloud_self")
     */
    public function index()
    {
        return $this->render('cloud_self/index.html.twig', [
            'controller_name' => 'CloudSelfController',
        ]);
    }
}
