<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InventoryController extends AbstractController
{
    /**
     * @Route("/inventory", name="inventory")
     */
    public function index()
    {
        return $this->render('inventory/index.html.twig', [
            'controller_name' => 'InventoryController',
        ]);
    }
}
