<?php

include 'simple_html_dom.php';

$html = new simple_html_dom();

$html->load_file('https://www.betclic.fr/football-s1/ligue-1-uber-eats-c4');




class game {

    public $teams;

    public $odds = [];
}


$StrasBourgOM = new Game();
$StrasBourgOM->teams = 'strasbourg om ';


$bordeauxMontpellier = new Game();
$bordeauxMontpellier->teams = 'bordeauxMontpellier';


$psgRennes = new Game();
$psgRennes->teams = 'psg Rennes ';

$brestLille = new Game();
$brestLille->teams = 'brest Lille ';

$metzDijon = new Game();
$metzDijon ->teams = 'metz dijon ';

$lensReims = new Game();
$lensReims->teams = 'lens Reims ';

$nimesAngers = new Game();
$nimesAngers->teams = 'nimes Angers';

$lorientNantes = new Game();
$lorientNantes->teams = 'lorient Nantes';

$niceMonaco = new Game();
$niceMonaco ->teams = 'nice Monaco';

$lyonSaintEtienne = new Game();
$lyonSaintEtienne ->teams = 'lyon SaintEtienne';




$gamesArray = [$StrasBourgOM, $bordeauxMontpellier, $psgRennes , $brestLille, $metzDijon, $lensReims,$nimesAngers , $lorientNantes , $niceMonaco , $lyonSaintEtienne ];

$gameIndex = 0;

$oddsCount = 0;


 foreach($html->find('.oddValue') as $odd){
    
    if($oddsCount == 6){
         
        $oddsCount = 0;
        
        $gameIndex += 1;
        
    }

    $game = $gamesArray[$gameIndex];


    if($oddsCount < 3){

        $game->odds[]= $odd;
    }


    $oddsCount += 1;
}


foreach($gamesArray as $game){
    

    echo $game->teams . ' :' ;

    foreach($game->odds as $odd){

        echo $odd . ' ';
    }

    echo '<br>';
}



?>