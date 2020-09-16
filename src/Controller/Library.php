<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Library extends AbstractController
{
    /**
     * @Route("/library")
     */

    public function getLibrary()
    {
        return $this->render('library.html.twig');
    }
}
