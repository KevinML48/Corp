<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExceptionController extends AbstractController
{
    /**
     * @Route("/show-exception")
     */
    public function showException(): Response
    {
        return $this->render('error/404.html.twig', [], Response::HTTP_NOT_FOUND);
    }
}
