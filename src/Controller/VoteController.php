<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Post;
use App\Entity\Vote;
use App\Form\PostFormType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class VoteController extends Controller
{

   
    /**
     * @Route("/vote/create", name="create_vote")
     */
    
    public function createVote(Request $request)
    {
        $vote = new Vote();
        
        
        if ($vote->getCreator() == false && $vote->getPostId() == false){
            return $this->render('Vote/Create.html.twig', ['formObj' => $form->createView()]);
        }
        
        else{
            
            // count relation userId && PostID
            return new JsonResponse("You have already voted, you can only vote once");
        }
            
    return new JsonResponse("Vote added" . $post->getTitle());
    
    }
}
