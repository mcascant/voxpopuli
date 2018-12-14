<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class UserController extends AbstractController
{
    /**
     * 
     * @Route("/register", name="register", methods={"POST"})
     * 
     */
    public function createRegisterAction(Request $request) 
    {
        $data = $request->getContent();
        var_dump($data);
        
        $user = $this->get('serializer')->deserialize($data, 'App\Entity\User', 'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        
        return new Response('', Response::HTTP_CREATED);
    }
    
    /**
     *
     * @Route("/login", name="login", methods={"GET", "OPTIONS"})
     *
     */
    /*public function showLoginAction(User $user)
    {
        var_dump($user->getEmail());
        $data = $this->get('serializer')->serialize($user, 'json');
        
        
        $response = new Response($data);
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }*/
}
