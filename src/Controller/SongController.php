<?php

namespace App\Controller;

use App\Entity\Songs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class SongController extends AbstractController
{
    /**
     * @Route("/song", name="create_song")
     */
    public function createSong(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createSong(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $song = new Songs();
        $song->setName('Sunshine of your love');

        // tell Doctrine you want to (eventually) save the Song (no queries yet)
        $entityManager->persist($song);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new song with id '.$song->getId());
    }


    /**
     * @Route("/song/{id}", name="song_show")
     */
    public function show($id)
    {
        $song = $this->getDoctrine()
            ->getRepository(Songs::class)
            ->find($id);

        if (!$song) {
            throw $this->createNotFoundException(
                'No song found for id '.$id
            );
        }

        return $this->render('song/show.html.twig', ['song' => $song]);
    }
}
