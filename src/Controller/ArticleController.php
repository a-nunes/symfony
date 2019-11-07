<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
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