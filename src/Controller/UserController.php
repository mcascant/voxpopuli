<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Form\UserFormType;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends AbstractController
{
    /**
     * 
     * @Route("/register", name="register", methods={"POST"})
     * 
     */
    public function createRegisterAction(Request $request, EncoderFactoryInterface $factory) 
    {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        
        $form->submit($request->request->all());
        
        if ($form->isValid()) {
            $user->setSalt(md5($user->getUsername()));
            $encoder = $factory->getEncoder($user);
            
            $user->setPassword(
                $encoder->encodePassword($user->getPassword(), $user->getSalt())
            );
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return new Response('', 201);
        }
        
        return new JsonResponse('', 400);
    }
    
    /**
     *
     * @Route("/login/list", name="login", methods={"GET", "OPTIONS"})
     *
     */
    public function listLoginAction()
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();
        
        $data = $this->get('serializer')->serialize($user, 'json');
        
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
    
    /**
     *
     * @Route("/login", name="article_show", methods={"POST"})
     *
     */
    public function loginAction(Request $request, EncoderFactoryInterface $factory)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        //$data = $this->get('serializer')->serialize($username, 'json');
        var_dump($password);
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)
            ->findOneByEmail($email);
        
        /// End Retrieve user
        // Check if the user exists !
        if(!$user){
            return new Response(
                'Username doesnt exists',
                Response::HTTP_UNAUTHORIZED,
                array('Content-type' => 'application/json')
            );
        }
        
        $encoder = $factory->getEncoder($user);
        $salt = $user->getSalt();
        
        if(!$encoder->isPasswordValid($user->getPassword(), $password, $salt)) {
            return new Response(
                'Username or Password not valid.',
                Response::HTTP_UNAUTHORIZED,
                array('Content-type' => 'application/json')
            );
        }
       
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $tokenid = $token->getUser()->getId();
        $this->get('security.token_storage')->setToken($token);
        
        $this->get('session')->set('_security_main', serialize($token));
        
        return $this->json(
            [
                "email" => $email,
                "password" => $password,
                "Token" => $tokenid,
                "LOGGED" => "202 ACCEPTED"
            ],
            202
        );
        
    }
}
