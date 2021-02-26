<?php

namespace App\Controller;
use App\Entity\SchoolYear;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")   //Dans la route, les utilisateurs pourront ajouter des paramètres
     */
    public function index()
    {


        return $this->render('home/index.html.twig', [
            'controller_name' => 'Bobby',
        ]);
    }

    



}
