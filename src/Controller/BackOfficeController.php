<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficeController extends AbstractController
{
    /**
     * @Route("/backOffice", name="back_office")
     */
    public function index(): Response
    {
        return $this->render('back_office/index.html.twig');
    }
}
