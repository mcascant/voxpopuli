<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Comments;
use App\Form\PostFormType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;





class CommentsController extends Controller
{

    /**
     * @Route("/comments/search", name="search_comments", methods={"GET", "OPTIONS"})
     */
    public function search(Request $request)
    {
        if (!$request->query->has('pattern')) {
            return new JsonResponse(
                ['errors' => ['Pattern must be specified']],
                400
            );
        }

        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository(Comments::class);
        $pattern = $request->query->get('pattern');

        $comments = $repository->findAllByField($pattern);

        $response = $this->json(
            ['data' => $comments],
            200
        );

        if ($request->getMethod() == 'OPTIONS') {
            $response->setContent('');
        }

        return $response;

    }
    /**
     * @Route("/comments/create", name="create_comments")
     */
    public function createComments(Request $request)
    {
        $comments = new Comments();
        $form = $this->createForm(CommentsFormType::class, $comments, ['standalone' => true]);

        $form->submit($request->request->all()); // Trying with handlerRequest and form was not submitted!!! LEARN
        if ($form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($comments);
            $manager->flush();

            return new JsonResponse("Comments created " . $comments->getTitle());
        }

        return $this->render('Comments/Create.html.twig', ['formObj' => $form->createView()]);
    }

    /**
     * @Route("/comments/list", name="comments_list")
     */
    public function commentsList()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);


        $arr = [
            'comments' => $this->getDoctrine()->getRepository(Comments::class)->findAll()
        ];

        $jsonContent = $serializer->serialize($arr, 'json');

        return new JsonResponse($jsonContent, 200, [], true);
    }

    /**
     * @Route("/comments/{comments}", name="comments_details")
     */
    public function commentsDetail(Comments $comments)
    {
        $arr = [
            'title' => $comments->getTitle(),
            'text' => $comments->getText()
        ];
        return new JsonResponse(implode(', ', $arr));
    }
}





