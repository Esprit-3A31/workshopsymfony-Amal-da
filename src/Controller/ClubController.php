<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClubRepository;
class ClubController extends AbstractController
{
    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }
    //q2
    #[Route('/affichc', name: 'club_aff')]
    public function list()
    {
        return $this->render("club/index.html.twig");
    }
    //q3
    
    //q6
    #[Route('/details', name: 'details_name')]
    public function formation()
    {   $v1="amal";
        return $this->render("club/details.html.twig",array("nom"=>$v1));
    }
//ex2

#[Route('/lists', name: 'list_formation')]
public function lists()
{
    
    $formations = array(
        array('ref' => 'form147', 'Titre' => 'Formation Symfony
             4','Description'=>'pratique',
            'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
            'nb_participants'=>19),
        array('ref'=>'form177','Titre'=>'Formation SOA' ,
            'Description'=>'theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
            'nb_participants'=>0),
        array('ref'=>'form178','Titre'=>'Formation Angular' ,
            'Description'=>'theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
            'nb_participants'=>12));
    return $this->
    render("club/list.html.twig",array("listFormation"=>$formations));
}

#[Route('/getName/{name}', name: 'name_club')]
    public function getName ($name)
    { 
        return $this->render("club/detail.html.twig",
    ['name'=>$name]);
    }

    //bd 
    #[Route('/clubs', name: 'app_clubs')]
    public function listclub (ClubRepository $repository)
    {   $clubs=$repository->findAll();
        return $this->render("club/clubs.html.twig",array("tabclub"=>$clubs));
    }

}
