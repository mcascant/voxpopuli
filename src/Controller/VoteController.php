<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Post;
use App\Entity\Vote;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class VoteController extends AbstractController
{

   
    /**
     * @Route("/vote/create/{postId}", name="create_vote")
     */
    public function createVote(int $postId, Security $security)
    {
        $user = $security->getToken()->getUser('id');
        var_dump($user);
        $vote = new Vote();
        $vote->addUserId($user);
        $vote->addPostId($postId);
    }
}
