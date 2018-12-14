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


class PostController extends Controller
{

    /**
     * @Route("/post/search", name="search_post", methods={"GET", "OPTIONS"})
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
        $repository = $manager->getRepository(Post::class);
        $pattern = $request->query->get('pattern');

        $posts = $repository->findAllByField($pattern);

        $response = $this->json(
            ['data' => $posts],
            200
        );

        if ($request->getMethod() == 'OPTIONS') {
            $response->setContent('');
        }

        return $response;

    }
    /**
     * @Route("/post/create", name="create_post")
     */
    public function createPost(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostFormType::class, $post, ['standalone' => true]);

        $form->submit($request->request->all()); // Trying with handlerRequest and form was not submitted!!! LEARN
        if ($form->isValid())
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($post);
            $manager->flush();

            return $this->redirectToRoute('homepage');
        }

        return new JsonResponse("Failure in Post Creation");
    }

    /**
     * @Route("/post/list", name="post_list")
     */
    public function postList()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);


        $arr = [
            'posts' => $this->getDoctrine()->getRepository(Post::class)->findAll()
        ];

        $jsonContent = $serializer->serialize($arr, 'json');

        return new JsonResponse($jsonContent, 200, [], true);
    }

    /**
     * @Route("/post/{post}", name="post_details")
     */
    public function postDetail(Post $post)
    {
        $arr = [
            'title' => $post->getTitle(),
            'text' => $post->getText()
        ];
        return new JsonResponse(implode(', ', $arr));
    }
}





