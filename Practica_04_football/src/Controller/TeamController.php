<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Team;
use App\Entity\Player;


class TeamController extends AbstractController
{
    #[Route('/team', name: 'app_team')]
    public function index(): Response
    {
        return $this->render('team/index.html.twig', [
            'controller_name' => 'TeamController',
        ]);
    }


    // • a method to add a new team
    // http://127.0.0.1:8003/team/test/new/JoseFidelOltraLandete/Sueca
    // http://127.0.0.1:8003/team/test/new/Barça/Barcelona
    #[Route('/team/test/new/{name}/{city}', name: 'new_team')]
    public function newTeam(EntityManagerInterface $entityManager, $name, $city) : Response {
        $team = new Team();
        $team->setName($name);
        $team->setCity($city);
        

        $entityManager->persist($team);
        $entityManager->flush();

        $action = ($team ? 'New team added' : 'Failed to add team');

        return $this->render('team/new_edit_team.html.twig', [
            'team' => $team,
            'page_title' => 'My team App - New team',
            'action' => $action
        ]);
    }

    //a method to change the name of a team 
    // http://127.0.0.1:8003/team/test/edit/Muzikalia/2
    #[Route('/team/test/edit/{name}/{id<\d+>}', name: 'team_edit')]
    public function updateTeam(EntityManagerInterface $entityManager, $id='', $name) : Response {
        $team = $entityManager->getRepository(Team::class)->find($id);
        if($team) {
            $action = "Team updated";
            $team->setName($name);
            $entityManager->flush();
        } else {
            $action = "Failed to modify contact";
        }

        return $this->render('team/new_edit_team.html.twig', [
            'team' => $team,
            'page_title' => 'My team App - Update team',
            'action' => $action
        ]);
    }

    //• a method to find a team by its id and display the name and the city in a view. 
    //In the same view, list also the names and age of the players who play in the team
    // http://127.0.0.1:8003/teambyid/3
    #[Route('/teambyid/{id<\d+>}', name: 'single_team')]
    public function teamById(EntityManagerInterface $entityManager, $id=''): Response
    {
        $team = $entityManager->getRepository(Team::class)->find($id);

        if (!$team instanceof Team) {
            $action = "Team not found";
            return new Response('Team not found!', Response::HTTP_NOT_FOUND);
        }

        // Get players associated with the team
        $players = $team->getPlayers();

        return $this->render('team/team.html.twig', [
            'team' => $team,
            'players' => $players, 
            'page_title' => 'My Team App - Team',
            
        ]);
    }


    //a method to retrieve all the teams in the table
    // http://127.0.0.1:8003/team_list
    #[Route('/team_list', name: 'team_list')]
    public function teamList(EntityManagerInterface $entityManager): Response
    {
        return $this->render('team/list.html.twig', [
            'teams' => $entityManager->getRepository(Team::class)->findAll(),
            'page_title' => 'My Team App - Team List'
        ]);
    }
}
