<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RentalController extends AbstractController
{
    /**
     * @Route("/rental", name="rental")
     */
    public function index()
    {
        return $this->render('rental/index.html.twig', [
            'controller_name' => 'RentalController',
        ]);
    }
}
