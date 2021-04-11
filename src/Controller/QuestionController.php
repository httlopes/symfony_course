<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/', name: 'homepage')]
    public function homepage(Environment $twigEnvironment): Response
    {
        // fun example of using Twig service directly
//        $html = $twigEnvironment->render('question/homepage.html.twig');
//
//        return new Response($html);
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @param $slug
     * @return Response
     */
    #[Route('/questions/{slug}', name: 'question_show')]
    public function show($slug): Response
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);

        //return new Response('Future page to show a question');
    }
}
