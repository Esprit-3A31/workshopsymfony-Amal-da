<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(): Response
    {
        return $this->render('classe/index.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }
    //message simple 
     #[Route('/adds', name: 'adds_élève')]
     public function addclasse()
     {
      return new Response("Classe 3A31");
     }

    //message paramétré
    #[Route('/add/{var}', name: 'add_élève')]
    public function addperson($var)
    {
        return new Response("Elève:".$var);
    }

    //Interface
    #[Route('/listss', name: 'list_élève')]
    public function lister()
    {
        return $this->render("classe/lists.html.twig");
    } 


}
