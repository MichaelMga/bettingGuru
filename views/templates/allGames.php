
<?php

  //collect the get request used to arrive on this page (championship id)

      $championshipId = $_GET["championshipId"];


  ?>




<style>


body{

  color: blue;
}



.infoDivText{

   font-size: 0.75vw;
   display: flex;
   justify-content: flex-end;
   align-items:center;
}


  </style>



<div id="gameListDiv">

</div>





 <div id='teamsDiv'>







 </div>



 <div id='championshipInfoDiv'>


   <div id='championshipInfoDivA'>
  <div id='championshipInfoDivAA'>
    <div id='championshipInfoDivAAA'><img class="topImg" src="./img/calendar.png" alt=""></div>


  </div>

  <div id='championshipInfoDivAB' class="infoDivText">
   31th

  </div>
</div>
<div id='championshipInfoDivA'>
  <div id='championshipInfoDivAA'>
    <div id='championshipInfoDivAAA'><img class="topImg" src="./img/avg.png" alt=""></div>

  </div>

  <div id='avgGoalsStats' class="infoDivText">
    2.47 goals/game

  </div>
</div>     	

<div id='championshipInfoDivA'>
  <div id='championshipInfoDivAA'>
    <div id='championshipInfoDivAAA'><img class="topImg" src="./img/up.png" ></div>

  </div>

  <div id='1stTeamStats' class="infoDivText">
  1st: Lille

  
  	</div>
</div>

   <div id='championshipInfoDivA'>
  <div id='championshipInfoDivAA'>
    <div id='championshipInfoDivAAA'><img class="topImg" src="./img/ball.png"></div>

  </div>

  <div id='1stScorersStats' class="infoDivText">
    1st scorers : Lille 

  </div>
</div>


<div id='championshipInfoDivA'>
  <div id='championshipInfoDivAA'>
    <div id='championshipInfoDivAAA'><img class="topImg" src="./img/defense.png" alt=""></div>

  </div>

  <div id='1stDefenseStats' class="infoDivText">
  1st defense : Lille 
  </div>
</div>



 </div>






<script>
    
    document.getElementById('navBar' + <?php echo $championshipId ?> ).style.opacity = 1;

         


    

    var dir = "http://localhost/bettingguru" + "?championshipId=" + "<?php echo $championshipId ?>";


    var gameListDiv = document.getElementById('gameListDiv');


    var weekSpan = document.getElementById('weekSpan');

    //var currentWeek = JSON.parse(<?php echo $currentWeek ?>);

    var currentGames =  JSON.parse(<?php echo $weeklyGames ?>).api.fixtures;

    console.log(currentGames);

 
    for(gameIndex = 0; gameIndex < currentGames.length; gameIndex++){

 

   

        
        var gameDiv = document.createElement('div');

        gameDiv.setAttribute("class", "gameDiv");



        var homeTeamDiv = document.createElement('div');

        homeTeamDiv.setAttribute("class", "gameDivTeam");

        var homeTeamImg = document.createElement('img');

        homeTeamImg.setAttribute("class" , "teamImg");

        homeTeamImg.setAttribute("src" , currentGames[gameIndex].homeTeam.logo);



        homeTeamDiv.append(homeTeamImg);

        gameDiv.append(homeTeamDiv);


        var gameDivMiddle = document.createElement('div');

        gameDivMiddle.setAttribute("class", "gameDivMiddle");

        var graphBtnContainer = document.createElement('div');

        graphBtnContainer.setAttribute("class", "graphBtnContainer");

        var graphImg = document.createElement('img');
        graphImg.setAttribute("class", "graphImg");
        graphImg.setAttribute("src" , "img/graph.png");
        

        graphBtnContainer.append(graphImg);


    

         
        //gameDiv.innerHTML += (currentGames[gameIndex].homeTeam.team_name);

        //gameDiv.innerHTML += (' - ');

        //gameDiv.innerHTML += (currentGames[gameIndex].awayTeam.team_name);


        var gameLink = document.createElement('button');

        gameLink.setAttribute('onclick', "triggerController()");

        gameLink.setAttribute("class", "gameLinkBtn");

        
        var a = document.createElement('a');

        a.setAttribute('href', dir + '&gameId=' + currentGames[gameIndex].fixture_id);

        a.append(gameLink);

        graphBtnContainer.append(a);

        
        gameDivMiddle.append(graphBtnContainer);
        gameDiv.append(gameDivMiddle);


        
        var awayTeamDiv = document.createElement('div');

        awayTeamDiv.setAttribute("class", "gameDivTeam");

        var awayTeamImg = document.createElement('img');

        awayTeamImg.setAttribute("class" , "teamImg");

        awayTeamImg.setAttribute("src" , currentGames[gameIndex].awayTeam.logo);

        


        awayTeamDiv.append(awayTeamImg);

        gameDiv.append(awayTeamDiv);


        document.getElementById('teamsDiv').append(gameDiv);

        

    }


    //weekSpan.innerHTML = currentWeek;

    //avg goals stats
 
 
    if(<?php echo $championshipId ?> == 2664){

       //statistic

       document.getElementById("avgGoalsStats").innerHTML = "2.69 avg.goals / game";
       //1st team
       document.getElementById("1stTeamStats").innerHTML = "1st team : PSG";
       //1st scorer
       document.getElementById("1stScorersStats").innerHTML = "Top Scorer : PSG";
       //1st defense
       document.getElementById("1stDefenseStats").innerHTML = "Top defense : Lille";



     } else if(<?php echo $championshipId ?> == 2790){

      //statistic
       document.getElementById("avgGoalsStats").innerHTML = "2.62 avg.goals / game";
       //1st team
       document.getElementById("1stTeamStats").innerHTML = "1st team : Man.City";
       //1st scorer
       document.getElementById("1stScorersStats").innerHTML = "Top Scorer : Man.City";
       //1st defense
       document.getElementById("1stDefenseStats").innerHTML = "Top defense : Man.City";


        


     } else if(<?php echo $championshipId ?> == 2833){

                //statistic
       document.getElementById("avgGoalsStats").innerHTML = "2.48 avg.goals / game";
       //1st team
       document.getElementById("1stTeamStats").innerHTML = "1st team : Atl.Madrid";
       //1st scorer
       document.getElementById("1stScorersStats").innerHTML = "Top Scorer : Barcelona";
       //1st defense
       document.getElementById("1stDefenseStats").innerHTML = "Top defense : Atl.Madrid";

      

     } else if(<?php echo $championshipId ?> == 2755){   
       
       //statistic
       document.getElementById("avgGoalsStats").innerHTML = "3.02 avg.goals / game";
       //1st team
       document.getElementById("1stTeamStats").innerHTML = "1st team : Bay.Munich";
       //1st scorer
       document.getElementById("1stScorersStats").innerHTML = "Top Scorer : Bay.Munich";
       //1st defense
       document.getElementById("1stDefenseStats").innerHTML = "Top defense : Leipzig";


     } else if(<?php echo $championshipId ?> == 2857){
         
        //statistic
       document.getElementById("avgGoalsStats").innerHTML = "3.01 avg.goals / game";
       //1st team
       document.getElementById("1stTeamStats").innerHTML = "1st team : Int.Milan";
       //1st scorer
       document.getElementById("1stScorersStats").innerHTML = "Top Scorer : Int.Milan";
       //1st defense
       document.getElementById("1stDefenseStats").innerHTML = "Top defense : Juventus";


    }

</script>

