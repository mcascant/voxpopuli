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
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Psr\Log\LoggerInterface;

class UserController extends AbstractController
{
    /**
     * 
     * @Route("/register", name="register", methods={"POST"})
     * 
     */
    public function createRegisterAction(
        Request $request,
        EncoderFactoryInterface $factory,
        \Swift_Mailer $mailer,
        EventDispatcherInterface $dispatcher
    ) {
        $user = new User();
        $form = $this->createForm(UserFormType::class, $user);
        
        $form->submit($request->request->all());
        
        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
            
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
    public function loginAction(Request $request, EncoderFactoryInterface $factory, LoggerInterface $logger)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $this->getDoctrine()->getManager()->getRepository(User::class)
            ->findOneByEmail($email);
        
        /// End Retrieve user
        // Check if the user exists !
        if(!$user){
            $logger->debug('User does not exist');
            return new Response(
                'Credentials error',
                Response::HTTP_UNAUTHORIZED,
                array('Content-type' => 'application/json')
            );
        }
        
        $encoder = $factory->getEncoder($user);
        $salt = $user->getSalt();
        
        if(!$encoder->isPasswordValid($user->getPassword(), $password, $salt)) {
            $logger->debug('Password does not match');
            return new Response(
                'Credentials error',
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
