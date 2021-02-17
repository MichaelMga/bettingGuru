<h1> Match :</h1>


<h1 id='homeTeamHTML'>Equipe à domicile : </h1>


<h1 id='awayTeamHTML'>Equipe à l'extérieur : </h1>



<h1>Stats équipe à domicile : </h1>


<h1 id='homeTeamAverageGoalsForHTML' >Moyenne de buts marqués: </h1>

<h1 id='homeTeamAverageGoalsAgainstHTML' >Moyenne de buts encaissés: </h1>

<h1 id='adjustedHomeTeamGoalsFor' >Buts marqués ajustés : </h1>



<h1>Stats équipe à l'extérieur : </h1>


<h1 id='awayTeamAverageGoalsFor' >Moyenne de buts marqués: </h1>

<h1 id='awayTeamAverageGoalsAgainst' >Moyenne de buts encaissés: </h1>

<h1 id='adjustedAwayTeamGoalsFor' >Buts marqués ajustés : </h1>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jstat/1.9.4/jstat.min.js'></script>


<script>

  var homeTeamScore;

  var awayTeamScore;

  var draws = 0;

  var homeTeamVictories = 0;

  var awayTeamVictories = 0;

   //DOM VARS

  var homeTeamHTML = document.getElementById('homeTeamHTML') ;

  var homeTeamAverageGoalsForHTML =  document.getElementById('homeTeamAverageGoalsForHTML') ;

  var homeTeamAverageGoalsAgainstHTML =  document.getElementById('homeTeamAverageGoalsAgainstHTML') ;

  

  var awayTeamAverageGoalsForHTML =  document.getElementById( 'awayTeamAverageGoalsFor') ;

  var awayTeamAverageGoalsAgainstHTML =  document.getElementById('awayTeamAverageGoalsAgainst') ;



  var adjustedHomeTeamGoalsForHTML = document.getElementById('adjustedHomeTeamGoalsFor');

  var adjustedAwayTeamGoalsForHTML = document.getElementById('adjustedAwayTeamGoalsFor');




  //KNOWING WE HAVE A GAME ID COMING ON THIS PAGE, WE EXTRACT BOTH TEAMS





  homeTeamHTML.innerHTML +=  "<?php echo $homeTeamName ?>";

  awayTeamHTML.innerHTML += "<?php echo $awayTeamName ?>";






  homeTeamAverageGoalsForHTML.innerHTML +=  <?php echo $homeTeamAvgGoalsFor ?>;

  homeTeamAverageGoalsAgainstHTML.innerHTML +=  <?php echo $homeTeamAvgGoalsAgainst ?>;




   



   awayTeamAverageGoalsForHTML.innerHTML += <?php echo $awayTeamAvgGoalsFor ?>;

   awayTeamAverageGoalsAgainstHTML.innerHTML += <?php echo $awayTeamAvgGoalsAgainst ?>;





   // HAVING THE NECESSARY STATS, WE CAN THEN CALCULATE THE ADJUSTED GOALS 



      var adjustedHomeTeamGoals = <?php echo $adjustedHomeTeamGoals ?>;

      var adjustedAwayTeamGoals = <?php echo $adjustedAwayTeamGoals ?>;



      var homeTeamStandardDeviation = <?php echo $homeTeamStandardDeviation  ?>;

      var awayTeamStandardDeviation = <?php echo $awayTeamStandardDeviation ?>;
        
      

     adjustedHomeTeamGoalsForHTML.innerHTML += " " + adjustedHomeTeamGoals;

     adjustedAwayTeamGoalsForHTML.innerHTML += " " +  adjustedAwayTeamGoals;
      


      for(i=0; i < 10000 ; i++){

        console.log( 'here is a game simulation Angers/Lyon. ' + '<br>');

        homeTeamScore = Math.floor(jStat.normal.inv( Math.random() , adjustedHomeTeamGoals , homeTeamStandardDeviation  ));
        awayTeamScore = Math.floor(jStat.normal.inv( Math.random() , adjustedAwayTeamGoals , awayTeamStandardDeviation  ));

        console.log( "<?php echo $homeTeamName ?>"  +  ' : ' + homeTeamScore);

        console.log( '<br>');

        console.log( "<?php echo $awayTeamName ?>"  +  ' : ' + awayTeamScore );

        
        if(homeTeamScore == awayTeamScore){

           draws++;


        } else if(homeTeamScore > awayTeamScore) {

           homeTeamVictories++;

        } else {

         awayTeamVictories++;

        }


   
      }

      alert('home team odd=> ' + (100/ ((homeTeamVictories/10000) * 100)) );
      alert('away team odd=> ' + (100/ ((awayTeamVictories/10000) * 100)) );
      alert('draw team odd=> ' + (100/ ((draws/10000 * 100)) ));





   </script>