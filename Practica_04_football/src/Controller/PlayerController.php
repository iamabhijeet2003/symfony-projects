<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Team;
use App\Entity\Player;

class PlayerController extends AbstractController
{
    #[Route('/player', name: 'app_player')]
    public function index(): Response
    {
        return $this->render('player/index.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }

    //• a method to add a new player. Remember to assign the player a team
    // http://127.0.0.1:8003/player/add/new/fidel/spain/52/2
    #[Route('/player/add/new/{name}/{country}/{age}/{id_team}', name: 'new_player')]
    public function newPlayer(EntityManagerInterface $entityManager,$id_team,$name,$country,$age) : Response {
        $team = $entityManager->getRepository(Team::class)->find($id_team);

        if (!$team instanceof Team) {
           
            return new Response('Team not found!', Response::HTTP_NOT_FOUND);
        }
        
        
        $player = new Player();
        $player->setIdTeam($team);
        $player->setName($name);
        $player->setCountry($country);
        $player->setAge($age);
        

        $entityManager->persist($player);
        $entityManager->flush();

        $action = ($player ? 'New player added' : 'Failed to add player');

        return $this->render('player/new_edit_player.html.twig', [
            'player' => $player,
            'page_title' => 'My Player App - New Player',
            'action' => $action
        ]);
    }


    //a method to find a player using the id of the player and display their name, country and age in
    //a view. Display the name of the team where the player plays, too
    // http://127.0.0.1:8003/playerById/4
    #[Route('/playerById/{id<\d+>}', name: 'single_player')]
    public function playerById(EntityManagerInterface $entityManager, $id=''): Response
    {
        $player = $entityManager->getRepository(Player::class)->find($id);

        if (!$player instanceof Player) {
           
            return new Response('Player not found!', Response::HTTP_NOT_FOUND);
        }

        // Get team which is associated with player
        $team = $player->getIdTeam();

        
        return $this->render('player/player.html.twig', [
            'player' => $player,
            'team' => $team, 
            'page_title' => 'Player Information',
        ]);
    }

    // a method to retrieve and display all the players of a team, using the team id
    // http://127.0.0.1:8003/playersByTeamId/2
    #[Route('/playersByTeamId/{teamId<\d+>}', name: 'players_by_team_id')]
    public function playersByTeamId(EntityManagerInterface $entityManager, $teamId = ''): Response
    {
        $team = $entityManager->getRepository(Team::class)->find($teamId);

        if (!$team instanceof Team) {
            return new Response('Team not found!', Response::HTTP_NOT_FOUND);
        }

        $players = $team->getPlayers();

        return $this->render('player/players_by_team.html.twig', [
            'team' => $team,
            'players' => $players,
            'page_title' => 'Players of Team',
        ]);
    }

    //a method to move the player from one team to another
    // http://127.0.0.1:8003/player/move/1/1
    #[Route('/player/move/{playerId<\d+>}/{newTeamId<\d+>}', name: 'move_player')]
    public function movePlayer(EntityManagerInterface $entityManager, $playerId = '', $newTeamId = ''): Response
    {
    $player = $entityManager->getRepository(Player::class)->find($playerId);
    $newTeam = $entityManager->getRepository(Team::class)->find($newTeamId);

    if (!$player instanceof Player || !$newTeam instanceof Team) {
        
        return new Response('Player or New Team not found!', Response::HTTP_NOT_FOUND);
    }

    $currentTeam = $player->getIdTeam();

    if ($currentTeam === $newTeam) {
        return new Response('Player is already in the selected team!');
    }

    // Remove player from the current team
    $currentTeam->removePlayer($player);

    // Add player to the new team
    $newTeam->addPlayer($player);

    $entityManager->flush();

    
    $action = ($player ? 'Player moved to new team' : 'Failed to move player');

        return $this->render('player/new_edit_player.html.twig', [
            'player' => $player,
            'page_title' => 'My Player App - Moving player team',
            'action' => $action
        ]);
    }


}
