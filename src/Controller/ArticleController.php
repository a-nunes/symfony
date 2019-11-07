<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooo');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'I ate bacon at lunch',
            'I love to eat some grass',
            'I\'ll never eat every flavor beans again.'
        ];

        dump($slug, $this);
        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-',' ',$slug)),
            'comments' => $comments,
        ]);
    }
}