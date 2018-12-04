<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilmTextController extends AbstractController
{
    /**
     * @Route("/film/text", name="film_text")
     */
    public function index()
    {
        return $this->render('film_text/index.html.twig', [
            'controller_name' => 'FilmTextController',
        ]);
    }
}
