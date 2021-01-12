<?php

namespace App\Controller;

use App\Controller\AbstractApiController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Form\PostType;

class PostsController extends AbstractApiController
{
    public function getPosts(Request $request): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->json($posts);
    }


    public function getPostById(int $id): Response
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->find($id);

        if (!$post) {
            throw $this->createNotFoundException(
                'No post found for id '.$id
            );
        }

        return $this->json($post);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

    public function createPost(Request $request): Response
    {
        $form = $this->buildForm(PostType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            print "Error";
            exit;
        }

        /** @var Post $post */
        $post = $form->getData();

        $this->getDoctrine()->getManager()->persist($post);
        $this->getDoctrine()->getManager()->flush();

        return $this->json($post);
    }
}
