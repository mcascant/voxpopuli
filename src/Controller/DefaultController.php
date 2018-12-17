<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Intl\Exception\NotImplementedException;

class DefaultController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }
    
    
    
    

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






