<?php
// src/Controller/PostAjaxController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PostAjaxController extends AbstractController
{
    #[Route('/posts/ajax', name: 'posts_ajax')]
    public function ajax(): Response
    {
        return $this->render('post_ajax/index.html.twig');
    }
}
