<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * @Route("/programs/", name="program_index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @Route("/programs/{page}", requirements={"page"="\d+"}, methods={"GET"}, name="program_show")
     * @param int $page
     * @return Response
     */
    public function show(int $page): Response
    {
        return $this->render('program/show.html.twig', [
            'page' => $page,
        ]);
    }
}