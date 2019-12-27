<?php

namespace App\Controller;

use App\Repository\RatingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param RatingRepository $r
     * @return Response
     */
    public function index(RatingRepository $r)
    {
        return $this->render('start/index.html.twig', [
            'controller_name' => 'StartController',
            'ratings' => $r->findBy([], ["stars" => "DESC"], 5)
        ]);
    }
}
