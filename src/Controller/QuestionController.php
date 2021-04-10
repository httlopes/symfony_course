<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        return new Response('Whatever dude');
    }

    /**
     * @return Response
     */
    #[Route('/questions/{slug}', name: 'questions')]
    public function show($slug): Response
    {
        return new Response('Future page to show a question')
    }
}
