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

    
  $game = json_decode(json_decode(getGame($gameId), true));
  

 echo $game->{"api"}->{"fixtures"}[0]->{"fixture_id"};

 



 /*

 {"api":{"results":1,"fixtures":[{"fixture_id":571577,"league_id":2664,"league":{"name":"Ligue 1","country":"France","logo":"https:\/\/media.api-sports.io\/football\/leagues\/61.png","flag":"https:\/\/media.api-sports.io\/flags\/fr.svg"},"event_date":"2020-11-20T20:00:00+00:00","event_timestamp":1605902400,"firstHalfStart":null,"secondHalfStart":null,"round":"Regular Season - 11","status":"Not Started","statusShort":"NS","elapsed":0,"venue":"Stade Louis II","referee":null,"homeTeam":{"team_id":91,"team_name":"Monaco","logo":"https:\/\/media.api-sports.io\/football\/teams\/91.png"},"awayTeam":{"team_id":85,"team_name":"Paris Saint Germain","logo":"https:\/\/media.api-sports.io\/football\/teams\/85.png"},"goalsHomeTeam":null,"goalsAwayTeam":null,"score":{"halftime":null,"fulltime":null,"extratime":null,"penalty":null},"events":null,"lineups":null,"statistics":null,"players":null}]}}



 */
  //require(' ../../views/templates/oneGame.php');


}



