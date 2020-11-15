
<h1><?php echo $games; ?></h1>



<h1>Ligue1</h1>

<h3>Semaine : <span id='weekSpan'></span> </h3>


<h5>Games</h5>

<div id="gameListDiv">

</div>




<script>
    

    var dir = "http://localhost/bettingguru/" + "<?php echo $championshipName ?>";


    var gameListDiv = document.getElementById('gameListDiv');


    var weekSpan = document.getElementById('weekSpan');

    var currentWeek = JSON.parse(<?php echo $currentWeek ?>).api.fixtures;

    var currentGames =   JSON.parse(<?php echo $weeklyGames ?>).api.fixtures;

    console.log(currentGames);

 
    for(gameIndex = 0; gameIndex < currentGames.length; gameIndex++){
        
     let gameDiv = document.createElement('div');
         

        gameDiv.innerHTML += (currentGames[gameIndex].homeTeam.team_name);

        gameDiv.innerHTML += (' - ');

        gameDiv.innerHTML += (currentGames[gameIndex].awayTeam.team_name);


        let gameLink = document.createElement('button');

        gameLink.setAttribute('onclick', "triggerController()");

        gameLink.innerHTML = 'get the odds for this game';

        
        let a = document.createElement('a');

        a.setAttribute('href', dir + '?gameId=' + currentGames[gameIndex].fixture_id);

        a.append(gameLink);


        gameDiv.append(a);


        gameListDiv.append(gameDiv);

    }


    weekSpan.innerHTML = currentWeek;



</script>

