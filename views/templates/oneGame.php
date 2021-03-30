<style>
   html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 11s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
      } 
   }

     #mainDiv{  

        position: absolute;

        top: 10vh;

        left: 5vw;

        height : 80vh;

        width : 90vw;

        display: flex;

        flex-direction: row;

        justify-content: center;

        align-items: center;


     }


     #stats{
        background: red;
        display:flex;
        justify-content:center;
        align-items:center;
  
     }


     #games{
        background: blue;
        display:flex;
        justify-content:space-around;
        align-items:center;

     }

     #gamesA{

         height:80%;
         width:40%;
         display:flex;
         justify-content:center;
         align-items:center;
     }


     #gamesB{

        height:80%;
         width:40%;
         display:flex;
         justify-content:center;
         align-items:center;
     }



      #rightDiv{

        height: 80%;

        width: 60%;

        display: flex;

        flex-direction: column;

        justify-content: space-between;

        border-radius: 11px;

        background:rgb(255,255,255,0.1);


     }


     #rightDivTop{
        width: 100%;
        height:60%;
        display: flex;
        flex-direction: row; 
        justify-content: space-around; 
        align-items: center;
     }

     .teamLogo{
        width: 30%;
        height : 80%;
        display:flex;
        flex-direction:column;
        align-items:center;

     }


     .teamLogoA{         
         height:85%;
         width:100%;
         display:flex;
         justify-content:center;
         align-items:center;
         display:flex;
         justify-content:center;
         align-items:center;
     }


     .teamLogoImg{

         height:70%;
         width:auto
     }


 






     .teamLogoB{
         height:15%;
         width:100%;
         display:flex;
         justify-content:center;
         align-items:center;
     }

     .teamLogoBA{  

         height:100%;
         width:100%;
         background:rgb(255,255,255,0.05);
         display:flex;
         flex-direction:column;
         align-items:center;
         justify-content: space-around;
         border-radius:5px;
        

     }

     .teamLogoBAA{

         height:35%;
         width:90%;
         display:flex;
         flex-direction:row;
         align-items:center;
         justify-content:space-between;

     }


     .teamLogoBAAA{

         height:90%;
         width:20%;
         display:flex;
         justify-content:center;
         align-items:center;

     }

     .positionImg{
         height:80%;
         width:auto;
     }

     
     .teamLogoBAAB{

         height:90%;
         width:20%;
         display:flex;
         justify-content:center;
         align-items:center;
     }













     #rightDivBottom{

        width: 100%;
        height:40%;
        display: flex;
        flex-direction: column;
     }


     #rightDivBottom1 {

        width: 100%;
        height:70%;
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        align-items: center;
        
     }

     
     #rightDivBottom1A{
        height: 80%;
         width: 40%;
         display:flex;
         flex-direction:column;
         justify-content:space-around;
         align-items:center;
     }


     #rightDivBottom1B{
         height: 80%;
         width: 40%;
         display:flex;
         flex-direction:column;
         justify-content:space-around;
         align-items:center;
     }


     #rightDivBottom1AA{

         height: 33%;
         width: 100%;

     }


     #rightDivBottom1AB{

         height: 33%;
         width: 100%;

     }

     
     #rightDivBottom1AC{

         height: 33%;
         width: 100%;
    
    }







    #rightDivBottom1BA{

         height:33%;
         width:100%;
         display:flex;

     }


     #rightDivBottom1BB{

       height:33%;
       width:100%;
       display:flex;


     }


    #rightDivBottom1BC{

      height:33%;
      width:100%;
      display:flex;


    }





     #rightDivBottom2{

        height: 30%;
        width: 100%;
        display: flex;
        flex-direction:row;
        justify-content: center;
        align-items:ceter;
     }

     #rightDivBottom2Center{

         height:100%;
         width:85%;
         display:flex;
         flex-direction:row;
         align-items:center;
         justify-content:space-between;


     }

     .barContent{

         display:flex;
         flex-direction:column;
         justify-content:space-around;
         align-items:center;
     }


     .barContentA{

         height:45%;
         width:100%;
         display:flex;
         flex-direction:row;
         align-items:center;
         justify-content:flex-start;

     }

     .barContentAA{
         height:70%;
         width:50%;
         align-items:center;
         justify-content:center;
         font-size: 0.8vw;

     }


     .barContentAAA{

     }





     .barContentB{     
         
         height:40%;
         width:100%;
         background: orange;
         border-radius: 2px;

     }


     .teamLogoBAA{

         display:flex;
         justify-content:space-around;
         align-items:center;

     }


     .oddContainer{
         height:60%;
         width:20%;
         background:rgb(255,255,255,0.05);
         display:flex;
         justify-content:center;
         align-items:center;
         border-radius:5px;
         position:relative;
         
     }

     .oddContainerInfo{
         position:absolute;
         top:30%;
         left : 5%;
         height:40%;
         width:10%;
         font-size:0.6vw;
         display:flex;
         justify-content:center;
         align-items:center;
     }

     






</style>








<div id='mainDiv'>


      <div id='rightDiv'>

          <div id='rightDivTop'>

              <div class='teamLogo'>
                     <div class='teamLogoA'>                          
                     
                          <img class='teamLogoImg' src="<?php echo $homeTeamLogo ?>">                      

                     </div>
                     
                     <div class='teamLogoB'>                           
                          <div class='teamLogoBA'>
                             <div class='teamLogoBAA'>
                                  <div class='teamLogoBAAA'>
                                  </div>
                                  <div class='teamLogoBAAB'>
                                  </div>
                             </div>
                             <div class='teamLogoBAA'>
                                  <div class='teamLogoBAAA'>
                                  </div>
                                  <div class='teamLogoBAAB'>
                                  </div>
                             </div>
                          </div>
                     </div>
              </div>

              <div class='teamLogo'>     
              
                     <div class='teamLogoA'>     
                          <img class='teamLogoImg' src="<?php echo $awayTeamLogo ?>"">                      
                     </div>
                     
                     <div class='teamLogoB'>                          
                        <div  class='teamLogoBA'>     
                             <div class='teamLogoBAA'></div>
                             <div class='teamLogoBAA'></div>
                         </div>
                     </div>
              
              
              </div>
          
          
          
          </div> 


          <div id='rightDivBottom'>

                  <div id='rightDivBottom1'>

                      <div id='rightDivBottom1A'>

                          <div class='barContent' id='rightDivBottom1AA'>
                                <div class='barContentA'>
                                      <div class='barContentAA'>
                                         avg.possession <span style='opacity:0.7'>67%</style>
                                      </div>
                                </div>
                                <div class='barContentB'></div>
                          </div>
                          <div class='barContent' id='rightDivBottom1AB'>
                                <div class='barContentA'>                                      
                                
                                      <div class='barContentAA'>
                                         avg.goals scored : 1.5 /game
                                      </div>

                                </div>
                                <div class='barContentB'></div>
                          </div>
                          <div class='barContent' id='rightDivBottom1AC'>
                                <div class='barContentA'>                                                 
                                    <div class='barContentAA'>
                                        victory rate <span style='opacity:0.7'>35%</style>
                                    </div>
                                  </div>
                                <div class='barContentB'></div>
                          </div>
                        
                      </div>
                      <div id='rightDivBottom1B'>
                          <div class='barContent' id='rightDivBottom1BA'>
                                <div class='barContentA'>                                      
                                
                                        <div class='barContentAA'>                                         
                                        
                                            avg.possession <span style='opacity:0.7'>23%</style>

                                        </div>

                                </div>
                                <div class='barContentB'></div>
                          </div>
                          <div class='barContent' id='rightDivBottom1BB'>
                                <div class='barContentA'>                                      
                                    <div class='barContentAA'>                                                
                                    
                                          avg.goals scored : <span style='opacity:0.7'>1.5/game</style>

                                    </div>
                                </div>
                                <div class='barContentB'>
                                </div>     
                           </div>
                          <div class='barContent'id='rightDivBottom1BC'>
                                <div class='barContentA'>                                     
                                        <div class='barContentAA'>                                       
                                             victory rate <span style='opacity:0.7'> 25%</style>
                                        </div> 
                                  </div>
                                <div class='barContentB'></div>     
                          </div>
                      </div>
                     
                 </div>

                  <div id='rightDivBottom2'>

                      <div id='rightDivBottom2Center'>
                        
                         <div class='oddContainer'>   

                              <div class='oddContainerInfo'>1</div>                      
                         
                               <div id='homeTeamOdd'></div>

                         </div>

                        <div class='oddContainer'>   
                              <div class='oddContainerInfo'>x</div>                      
                             <div id='drawOdd'></div>

                        </div>

                        <div class='oddContainer'>                                   
                        
                         <div class='oddContainerInfo'>2</div>                      

                        
                          <div id='awayTeamOdd'></div>

                        
                        </div>
                      
                      </div>
                  
                  </div>
               

          </div> 
   
      
      </div>

</div>




<div id='odds'></div>



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


  var loadingDiv = document.getElementById('loadingDiv');

  var homeTeamOdd = document.getElementById('homeTeamOdd');
  var drawOdd = document.getElementById('drawOdd');
  var awayTeamOdd = document.getElementById('awayTeamOdd');


  var awayTeamAverageGoalsForHTML =  document.getElementById( 'awayTeamAverageGoalsFor') ;

  var awayTeamAverageGoalsAgainstHTML =  document.getElementById('awayTeamAverageGoalsAgainst') ;



  var adjustedHomeTeamGoalsForHTML = document.getElementById('adjustedHomeTeamGoalsFor');

  var adjustedAwayTeamGoalsForHTML = document.getElementById('adjustedAwayTeamGoalsFor');




  //KNOWING WE HAVE A GAME ID COMING ON THIS PAGE, WE EXTRACT BOTH TEAMS





  //homeTeamHTML.innerHTML +=  "<?php //echo $homeTeamName ?>";

  //awayTeamHTML.innerHTML += "<?php //echo $awayTeamName ?>";


  



  //homeTeamAverageGoalsForHTML.innerHTML +=  <?php //echo $homeTeamAvgGoalsFor ?>;

  //homeTeamAverageGoalsAgainstHTML.innerHTML +=  <?php //echo $homeTeamAvgGoalsAgainst ?>;




   



   //awayTeamAverageGoalsForHTML.innerHTML += <?php //echo $awayTeamAvgGoalsFor ?>;

   //awayTeamAverageGoalsAgainstHTML.innerHTML += <?php //echo $awayTeamAvgGoalsAgainst ?>;





   // HAVING THE NECESSARY STATS, WE CAN THEN CALCULATE THE ADJUSTED GOALS 



      var adjustedHomeTeamGoals = <?php echo $adjustedHomeTeamGoals ?>;

      var adjustedAwayTeamGoals = <?php echo $adjustedAwayTeamGoals ?>;



      var homeTeamStandardDeviation = <?php echo $homeTeamStandardDeviation  ?>;

      var awayTeamStandardDeviation = <?php echo $awayTeamStandardDeviation ?>;
        
      

     //adjustedHomeTeamGoalsForHTML.innerHTML += " " + adjustedHomeTeamGoals;

     //adjustedAwayTeamGoalsForHTML.innerHTML += " " +  adjustedAwayTeamGoals;
      


      for(i=0; i < 10000 ; i++){


        homeTeamScore = Math.floor(jStat.normal.inv( Math.random() , adjustedHomeTeamGoals , homeTeamStandardDeviation  ));
        awayTeamScore = Math.floor(jStat.normal.inv( Math.random() , adjustedAwayTeamGoals , awayTeamStandardDeviation  ));

    
        if(homeTeamScore == awayTeamScore){

           draws++;


        } else if(homeTeamScore > awayTeamScore) {

           homeTeamVictories++;

        } else {

         awayTeamVictories++;

        }


   
      }


      homeTeamOdd.innerHTML += (100/ ((homeTeamVictories/10000) * 100)).toFixed(2);
      drawOdd.innerHTML += (100/ ((draws/10000 * 100)) ).toFixed(2);
      awayTeamOdd.innerHTML += (100/ ((awayTeamVictories/10000) * 100)).toFixed(2);







</script>


