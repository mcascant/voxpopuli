<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    private $twig;

    /**
     * Homepage
     *
     * The homepage of the application
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return new Response(
            $this->twig->render('homepage.html.twig')
        );
    }
}






