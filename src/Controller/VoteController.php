<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Post;
use App\Form\PostFormType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class VoteController extends Controller
{

   
    /**
     * @Route("/vote/create/{post}", name="create_vote")
     */
    public function createVote(Request $request, Post $post)
    {
        if ($post->getVoters()->contains($this->getUser())) {
            return new JsonResponse(
                [
                    'error' => [
                        'messages' => [
                            'You have already voted, you can only vote once'
                        ]
                    ]
                ],
                403
            );
        }

        $post->addVoter($this->getUser());
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($post);
        $manager->flush();
        
        return new JsonResponse(
            [
                'data' => ['Vote added']
            ]
        );
    
    }
}
