<html>

<head>

<meta charset='UTF-8'>

<title>Betting Guru</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

</head>

<body>



<style type="text/css">


*{
  margin:0;
  padding: 0;
}


body{

  background: rgb(0,0,0,0.55);

  font-size : 1vw;

  font-family: 'Righteous', cursive;
}



 #navBar{
  position:fixed;
  z-index:2;
  top:0px;
  left:0px;
  height:10%;
  width:100%;
  background:rgb(0,0,0,0.55);
  display:flex;
  justify-content: space-around;
  align-items: center;
}

#championshipInfoDiv{

  display: none;
}

  .navBarA{
    height: 80%;
    width: 70%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;

  }

  .navBarB{
    height:80%;
    width:20%;
    display: flex;
    justify-content: center;
    align-items: center;
  }


  #logoDiv{
    height: 6vh;
    width: 6vh;
  display: flex;
  justify-content: center;
  align-items: center;
  }

  .navBarTeam{
    height:90%;
    width: 15%;
    border-radius:50px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity: 0.2;
    position:relative;
  }

  .championshipLink{

      position:absolute;
      top:0;
      left:0;
      height:90%;
      width:90%;
      z-index:5;
      cursor:pointer;
      opacity:0;
      
  }




  #teamsDiv{
    position: absolute;
    z-index:1;
    top:10%;
    left:0px;
    height: 180%;
    width: 100%;
    background: rgb(255,255,255,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
  }


  .gameDiv{
    height: 8%;
    width: 95%;
    background: rgb(255,255,255,0.15);
    display: flex;
    justify-content: space-around;
    align-items: center;

  }



  .gameDivTeam{

    height: 80%;
    width: 35%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;

  }

  .teamDescription{

    display: none;
  }



  


  .gameDivMiddle{

    height: 80%;
    width: 15%;
    background: rgb(255,255,255,0.15);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius:10px;


  }

  .teamImg{

    height: 90%;
    width: auto;
  }

  .graphImg{

    height: 80%;
    width: auto;

  }


  .graphBtnContainer{

    display:flex;
    cursor: pointer;
    justify-content:center;
    align-items:center;
    height: 7.5vh;
    width: 7.5vh;
    border-radius: 30px;
    position:relative;
  }



 .topImg{

   height:90%;
   width: auto;

 }

 .gameLinkBtn{

     position:absolute;
     top:0;
     left:0;
     height:100%;
     width:100%;
     opacity:0;
     cursor:pointer;
 }





@media only screen and (min-width: 800px){

  
  .navBarA{
    width: 60%;
}
.navBarB{

  margin-left:10%;
}



  #teamsDiv{

    position: absolute;
    top:15%;
    left:5%;
    height: 180%;
    width: 70%;
    background: rgb(255,255,255,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    border-radius: 15px;

  }





 #championshipInfoDiv{

     position: fixed;
     top:15%;
     width:19%;
     height:80%;
     right:2.5%;
    border-radius:15px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:space-around;
    background: rgb(255,255,255,0.15);

  }



   #championshipInfoDivA{

    height: 15%;
    width: 80%;
    background: rgb(255,255,255,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    border-radius: 10px;
    font-size: 1.65vw;

   }

 #championshipInfoDivAA{

  height: 20%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top:2%;
 }

 #championshipInfoDivAAA{

   display:flex;
   justify-content: center;
   align-items: center;
   height: 100%;
   width: 30%;
 }

 #championshipInfoDivAB{
   height: 70%;
   width: 100%;
   display:flex;
   justify-content: center;
   align-items: flex-end;
   padding-bottom: 7.5%;
   font-size: 0.75vw;

 }


       .teamDescription{

        position: absolute;
    top: 5%;
    height: 90%;
    width: 25%;
    background: rgb(255,255,255,0.15);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

  }


  .gameDivAwayTeamDescription{

    right:0.25%;
  
  }




  .gameDivHomeTeamDescription{

    left: 0.25%;

  }








 .teamDescriptionA{

      height: 30%;
      width: 85%;
      display: flex;
      flex-direction: row;
      padding-right:1%;
      justify-content: flex-start;
      align-items: center;

  }

  .teamDescriptionB{

   height: 30%;
      width: 85%;
      display: flex;
      flex-direction: row;
      padding-right:1%;
      justify-content: flex-start;
      align-items: center;


  }

  .teamDescriptionC{

     height: 30%;
      width: 85%;
      display: flex;
      flex-direction: row;
      padding-right:1%;
      justify-content: flex-start;
      align-items: center;

     }









 }





</style>

<header>


<?php 

   $rootUrl = "http://localhost/bettingguru";

   $ligue1Id = "2664";

   $premierLeagueId = "2790";

   $ligaId = "2833";

   $bundesligaId = "2755";

   $serieAId = "2857";

?>
    



</header>
    


 <div id='navBar'>

   <div class='navBarA'>
      <div class='navBarTeam' id='navBar2664'>
      <a class='championshipLink' href="<?php echo $rootUrl ?>?championshipId=<?php echo $ligue1Id ?>"><div>Ligue1</div></a>
    <img class="topImg" src="./img/ligue1.png" alt="">
    </div>
      <div class='navBarTeam' id='navBar2833'>
      <a class='championshipLink' href="<?php echo $rootUrl ?>?championshipId=<?php echo $ligaId ?>"><div>Liga</div></a>
    <img class="topImg" src="./img/liga.png" alt="">

    </div>
      <div class='navBarTeam' id='navBar2755'>
      <a class='championshipLink' href="<?php echo $rootUrl ?>?championshipId=<?php echo $bundesligaId ?>"><div>BundesLiga</div></a>
      <img class="topImg" src="./img/bundesliga.png" alt="">

    </div>
      <div class='navBarTeam' id='navBar2790'>
      <a class='championshipLink' href="<?php echo $rootUrl ?>?championshipId=<?php echo $premierLeagueId ?>"><div>premier League</div></a>
      <img class="topImg" src="./img/BPL.png" alt="">

    </div>
      <div class='navBarTeam' id='navBar2857' >
      <a class='championshipLink' href="<?php echo $rootUrl ?>?championshipId=<?php echo $serieAId ?>"><div>Serie A</div></a>
      <img class="topImg" src="./img/seriea.png" alt="">

    </div>

   </div>


   <div class='navBarB'>

      <div id='logoDiv'>
    <img class="topImg" src="./img/betnet.png" alt="">


    </div>
     
   </div>
   
 </div>
