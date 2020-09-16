<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", methods={"GET","HEAD"}, name="register")
     */

    //ajout d'une page classique
    public function getRegister()
    {
        return $this->render('register.html.twig');
    }


}