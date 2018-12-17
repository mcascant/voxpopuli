<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Intl\Exception\NotImplementedException;

class PrivacyController extends AbstractController
{
    private $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }
    
    /**
     * Privacy & Legal Terms view
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/privacy", name="privacyAndLegalTerms")
     */
    
    public function homepage()
    {
        return new Response(
            $this->twig->render('privacyAndLegalTerms.html.twig')
            );
    }
}






