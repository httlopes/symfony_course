<?php

namespace App\Controller;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;
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
    public function show($slug, MarkdownParserInterface $markdownParser, CacheInterface $cache): Response
    {
        $answers = [
            'Make sure your cat is sitting `purrrfectly` still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        $questionText = 'I\'ve been turned into a cat, any thoughts on how to turn back? While I\'m **adorable**, I don\'t really care for cat food.';

        $parsedQuestionText = $cache->get('markdown_' . md5($questionText), function () use ($questionText, $markdownParser) {
            return $markdownParser->transformMarkdown($questionText);
        });

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
            'questionText' => $parsedQuestionText
        ]);

        //return new Response('Future page to show a question');
    }
}
