<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    /**
     * @Route("/upload", methods={"GET","HEAD"}, name="upload")
     */

    //ajout d'une page classique
    public function getUpload()
    {
        return $this->render('upload.html.twig');
    }


}