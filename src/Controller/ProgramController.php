<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * Correspond à la route /programs/ et au name "program_index"
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        // ...
    }

    /**
     * Correspond à la route /programs/ et au name "program_show"
     * @Route("/programs/{id}", methods={"GET"}, requirements={"page"="\d+"}, name="program_show")
     */
    public function show(int $id): Response
    {
        return $this->render('app/show.html.twig', ['id' => $id]);
    }

    /**
     * Correspond à la route /programs/new et au name "program_new"
     * @Route("/new", name="new")
     */
    public function new(): Response
    {
        // ...
    }
}
