<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/legal")
 */
class LegalController extends AbstractController
{

    /**
     * @Route("/impress", name="legal_impress")
     */
    public function impress()
    {
        return $this->render('legal/impress.html.twig');
    }
}
