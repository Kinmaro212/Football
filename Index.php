<?php

Include "Carreer.php";
Include "Club.php";
Include "Country.php";
Include "Player.php";




// Création des pays
$france = new Country("France" );
$spain = new Country("Spain");
$UK = new country("Unitedkingdom");
$italie = new country("Italie");

// Création des clubs
$psg = new Club("Paris Saint-Germain",1878 , $france);
$barca = new Club("FC Barcelona", 1899, $spain);
$RM = new Club ("Réal Madrid", 1902, $spain);
$juventus = new Club ("Juventus", 1897, $italie);
$racingStras = new Club ("Racing club Strasbourg", 1886, $france);
$MU = new Club ("Manchester United", 1886, $UK);

$nationality =


// Création des joueurs
$neymar = new Player("Neymar", "JR", "Brazil", new DateTime("1992-02-05"));
$messi = new Player("Lionel", "Messi", "Argentina", new DateTime("1987-06-24"));



$neymarCarreer1 = new carreer ($barca, "2013", "2017");
$neymarCarreer2 =new carreer ($psg, "2017", $anneeFin);
$mbappeCarreer = new carreer ($psg, "2017",  $anneeFin);
$messiCarreer1 = new carreer ($barca, "2004",  "2021");
$messiCarreer2 = new carreer ($psg, "2021",  $anneeFin);
$CR7Carreer1= new carreer ($juventus, "2018",  $anneeFin);

// Ajout des carrières aux joueurs
$neymar->addCareer($psg, 2017);
$messi->addCareer($barca, 2004);
$messi->addCareer($psg, 2021);

// Ajout des clubs aux pays
$france->addClub($psg);
$france->addClub($OM);
$spain->addClub($barca);
$spain->addClub($RM);
$UK->addClub($MC);
$UK->addClub($MU);

// Ajout des joueurs aux clubs
$psg->addPlayer($neymar, 2017);
$psg->addPlayer($messi, 2021);
$barca->addPlayer($messi, 2004);

$player1 = new player ("Messi", "Lionel", $country, 1990-03-15);
$player2 = new player ("Cristiano", "Ronaldo", $country, 1987-03-15);
$player3 = new player ("Neymar", "Junior", $country, 1992-03-15);
$player4 = new player ("Kylian", "Mpappé", $country, 2000-03-15);
$player5 = new player ("Ziyech", "Hakim", $country, 1991-03-15);



var_dump(getPlayersDetails());


// Utilisation des méthodes pour obtenir les informations

// Lister les clubs dans un pays
$clubsInFrance = $france->getClubNames(); // ["Paris Saint-Germain"]

// Lister les joueurs dans une équipe avec leurs détails
 $psgPlayers = $psg->getPlayersDetails(); 
/*
[
    ["name" => "Neymar", "surname" => "JR", "age" => 30, "nationality" => "Brazil"],
    ["name" => "Lionel", "surname" => "Messi", "age" => 35, "nationality" => "Argentina"]
]
*/

// Lister les clubs où un joueur a joué avec les années
$messiCareer = $messi->getCareer(); 
/*
[
    ["club" => "FC Barcelona", "startYear" => 2004],
    ["club" => "Paris Saint-Germain", "startYear" => 2021]
]
*/





?>
