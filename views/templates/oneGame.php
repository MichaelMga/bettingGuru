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

   //DOM VARS

  var homeTeamHTML = document.getElementById('homeTeamHTML') ;


  var homeTeamAverageGoalsForHTML =  document.getElementById('homeTeamAverageGoalsForHTML') ;

  var homeTeamAverageGoalsAgainstHTML =  document.getElementById('homeTeamAverageGoalsAgainstHTML') ;

  

  var awayTeamAverageGoalsForHTML =  document.getElementById( 'awayTeamAverageGoalsFor') ;

  var awayTeamAverageGoalsAgainstHTML =  document.getElementById('awayTeamAverageGoalsFor') ;



  var adjustedHomeTeamGoalsForHTML = document.getElementById('adjustedHomeTeamGoalsFor');

  var adjustedAwayTeamGoalsForHTML = document.getElementById('adjustedAwayTeamGoalsFor');




  //KNOWING WE HAVE A GAME ID COMING ON THIS PAGE, WE EXTRACT BOTH TEAMS




  var homeTeam = <?php echo $game ?>.api.fixtures[0].homeTeam;

  var awayTeam = <?php echo $game ?>.api.fixtures[0].awayTeam;
  

  homeTeamHTML.innerHTML +=  homeTeam.team_name;

  awayTeamHTML.innerHTML += awayTeam.team_name;







  //FROM THOSE TEAMS, WE OBTAIN STATS



  console.log('home team id ' + homeTeam.team_id); //77


  var homeTeamStats = <?php echo json_decode(getTeamStats('2664' , '77')) ?>.api.statistics;

  console.log(homeTeamStats);


  var homeTeamAverageGoalsFor = homeTeamStats.goalsAvg.goalsFor.total;

  var homeTeamAverageGoalsAgainst = homeTeamStats.goalsAvg.goalsAgainst.total;



  homeTeamAverageGoalsForHTML.innerHTML +=  homeTeamAverageGoalsFor;

  homeTeamAverageGoalsAgainstHTML.innerHTML +=  homeTeamAverageGoalsAgainst;






 console.log('away team id ' + awayTeam.team_id); //80

   var awayTeamStats = <?php echo json_decode(getTeamStats('2664' , '80'))?>.api.statistics


   console.log(awayTeamStats);

   
  var awayTeamAverageGoalsFor = awayTeamStats.goalsAvg.goalsFor.total;

  var awayTeamAverageGoalsAgainst = awayTeamStats.goalsAvg.goalsAgainst.total;



   awayTeamAverageGoalsForHTML.innerHTML += awayTeamAverageGoalsFor;

   awayTeamAverageGoalsAgainstHTML.innerHTML +=  awayTeamAverageGoalsAgainst;





   // HAVING THE NECESSARY STATS, WE CAN THEN CALCULATE THE ADJUSTED GOALS 

      

     adjustedHomeTeamGoalsForHTML.innerHTML = Math.sqrt(homeTeamAverageGoalsFor * awayTeamAverageGoalsAgainst).toFixed(2);

     adjustedAwayTeamGoalsForHTML.innerHTML = Math.sqrt(awayTeamAverageGoalsFor * homeTeamAverageGoalsAgainst).toFixed(2);



    //WE THEN CALCULATE THE STANDARD DEVIATION OF EACH TEAMS GOAL SCORING


            //GET HOME TEAM GAMES ARRAY THIS SEASON


      var homeTeamGamesArray =  <?php echo json_decode(getTeamFixtures('2664' , '77'))?>.api.fixtures;

      console.log(homeTeamGamesArray);
      


     var goalsScored;

     var sumOfDeviations;

     var deviation;


     console.log('the standard deviation for the home team is' + sumOfDeviations)

     
     sumOfDeviations = 0;

      for(htGameIndex=0; htGameIndex < 10; htGameIndex++){


         if(homeTeamGamesArray[htGameIndex].homeTeam.team_name == 'Angers' ){

              goalsScored = homeTeamGamesArray[htGameIndex].goalsHomeTeam;

              console.log('angers is the home team' + 'they scored a number of goals of ' + goalsScored);

      
              
            } else {
               
              goalsScored = homeTeamGamesArray[htGameIndex].goalsAwayTeam;

              console.log('angers is the away team' + 'they scored a number of goals of ' + goalsScored);


            }

            deviation = goalsScored - homeTeamAverageGoalsFor;

            sumOfDeviations += Math.pow(deviation,2);

            console.log('deviation for this game ' + deviation)


            console.log('at this point the sum of deviations is ' + sumOfDeviations)
       }

      
       var homeTeamDeviation = Math.sqrt(sumOfDeviations/11).toFixed(2);
 

       console.log('the standard deviation for the home team is' + homeTeamDeviation);









      //STANDARD DEVIATION OF AWAY TEAM







      var awayTeamGamesArray = <?php echo json_decode(getTeamFixtures('2664' , '80'))?>.api.fixtures;



     
     sumOfDeviations = 0;

      for(htGameIndex=0; htGameIndex < 10; htGameIndex++){


         if(awayTeamGamesArray[htGameIndex].homeTeam.team_name == 'Lyon' ){

              goalsScored = awayTeamGamesArray[htGameIndex].goalsHomeTeam;

              console.log('Lyon is the home team' + 'they scored a number of goals of ' + goalsScored);
      
              
            } else {
               
              goalsScored = awayTeamGamesArray[htGameIndex].goalsAwayTeam;

              console.log('Lyon is the away team' + 'they scored a number of goals of ' + goalsScored);


            }


            deviation = goalsScored - awayTeamAverageGoalsFor;

            sumOfDeviations += Math.pow(deviation,2);

            console.log('deviation for this game ' + deviation)


            console.log('at this point the sum of deviations is ' + sumOfDeviations)
       }

      
       var awayTeamDeviation = Math.sqrt(sumOfDeviations/11).toFixed(2);


         console.log('la deviation standard de lyon est ' + awayTeamDeviation );





           //GET AWAY TEAM GAMES ARRAY THIS SEASON








        //NOW THAT WE HAVE ALL THE NECESSARY STATS FOR BOTH TEAMS, ALL THERE IS LEFT TO DO : 

        //SIMULATE A SERIES OF GAMES IN THE BROWSER.

        


         //IMPLEMENTATION OF THE NORMAL INV FUNCTION

 
        console.log(jStat.normal.inv( 0.5 , 1.5 , 1.3 ));
        





   </script>