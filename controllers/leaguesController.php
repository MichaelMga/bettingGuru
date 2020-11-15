<?php
  
  
  require 'apiController.php';




function seeOneChampionship($championshipId){
     
    //I WANT TO AVOID API CALLS. SO I'LL MINIMIZE ANY CALL I CAN.

    
    $championshipName = 'ligue 1';

    $games = 'liste des matchs de ' . $championshipName ;

    $currentWeek = getCurrentWeek($championshipId);
    
    $weeklyGames = getWeeklyGames('Regular_Season_-_11'); 



    $championshipName = 'ligue1';

    require(' ../../views/templates/allGames.php');


}



function seeOneGame($gameId){

  //USING THE GAME ID, GET THE HOME TEAM, AND THE AWAY TEAM

    
  $game = json_decode(getGame($gameId));

  
 //STATS HOME TEAM




 
  require(' ../../views/templates/oneGame.php');


}



