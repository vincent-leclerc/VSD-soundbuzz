<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", methods={"GET","HEAD"}, name="profil")
     */

    //ajout d'une page classique
    public function getProfil()
    {
        return $this->render('profil.html.twig');
    }


}