<?php
// src/Controller/PostController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PostController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/posts/load', name: 'posts_load')]
    public function load(): Response
    {
        $response = $this->client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $posts = $response->toArray();

        // return $this->json($posts);

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
