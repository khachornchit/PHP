<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StaffController extends AbstractController
{
    /**
     * @Route("/staff", name="staff")
     */
    public function index()
    {
        return $this->render('staff/index.html.twig', [
            'controller_name' => 'StaffController',
        ]);
    }
}
