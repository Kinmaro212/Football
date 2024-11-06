<?php

Include "Carreer.php";
Include "Club.php";
Include "Country.php";
Include "Player.php";




// Création des pays
$france = new Country("France" );
$spain = new Country("Spain");
$UK = new country("United kingdom");
$italia = new country("Italia");
$turquie = new country("Turquie");

// Création des club
$psg = new Club("Paris Saint-Germain","1878" , $france);
$barca = new Club("FC Barcelona","1899" , $spain);
$RM = new Club ("Réal Madrid", "1902", $spain);
$juventus = new Club ("Juventus", "1897", $italia);
$racingStras = new Club ("Racing club Strasbourg", "1886", $france);
$MU = new Club ("Manchester United", "1886", $UK);
$gala= new Club ("Galatasaray", "1916", $turquie);
$chelsea = new Club ("Chelsea", "1905", $UK);



// Création des joueurs
$neymar = new Player("Neymar", "JR", "Brazil", new DateTime("1992-02-05"));
$messi = new Player("Lionel", "Messi", "Argentina", new DateTime("1987-06-24"));
$cr7 = new Player("Cristiano", "Ronaldo", "Portugal", new DateTime("1985-02-05"));
$mbappe = new Player("Kylian", "Mbappé", "France", new DateTime("2000-12-20"));
$maestro7 = new Player("Hakim", "Ziyech", "Maroc", new DateTime("1995-12-20"));





$neymarCarreer1 = new carreer($barca, "2013", $neymar, "2017");
$neymarCarreer2 =new carreer ($psg, "2017",  $neymar);
$mbappeCarreer = new carreer ($psg, "2017", $mbappe);
$messiCarreer1 = new carreer ($barca, "2004", $messi, "2021");
$messiCarreer2 = new carreer ($psg, "2021", $messi);
$CR7Carreer1 = new carreer ($juventus, "2018", $cr7);
$maestroCarreer1 = new carreer ($chelsea, "2020", $maestro7, "2023");
$maestroCarreer2 = new carreer ($gala, "2023", $maestro7);

// Ajout des carrières aux joueurs
// $neymar->addCareer($neymarCarreer1);
// $messi->addCareer($messiCarreer1);
// $messi->addCareer($messiCarreer2);

// // Ajout des club aux pays
// // $france->addClub($psg);
// // $france->addClub($OM);
// // $spain->addClub($barca);
// // $spain->addClub($RM);
// // $UK->addClub($MC);
// // $UK->addClub($MU);

// // Ajout des joueurs aux club
// $psg->addPlayer($neymar, 2017);
// $psg->addPlayer($messi, 2021);
// $barca->addPlayer($messi, 2004);








// C'est une methode de la classe donc on appelle de cette manière 


// Utilisation des méthodes pour obtenir les informations

// Lister les club dans un pays
// $clubInFrance = $france->getClubNames(); // ["Paris Saint-Germain"]

// Lister les joueurs dans une équipe avec leurs détails

/*
[
    ["name" => "Neymar", "surname" => "JR", "age" => 30, "nationality" => "Brazil"],
    ["name" => "Lionel", "surname" => "Messi", "age" => 35, "nationality" => "Argentina"]
]
*/

// Lister les club où un joueur a joué avec les années
// $messiCareer = $messi->getCareer(); 
/*
[
    ["club" => "FC Barcelona", "startYear" => 2004],
    ["club" => "Paris Saint-Germain", "startYear" => 2021]
]
*/


echo $france ->afficherClub();
echo $spain ->afficherClub();
echo $UK ->afficherClub();
echo $italia ->afficherClub();
echo $turquie ->afficherClub();
echo $psg->afficherPlayers();
echo $RM->afficherPlayers();



?>
