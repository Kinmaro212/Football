<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>FOOTBALL</title>
</head>
<body>  

  



<?php

include "Carreer.php";
include "Club.php";
include "Country.php";
include "Player.php";

// Création des pays
$france = new Country("France");
$spain = new Country("Spain");
$uk = new Country("United Kingdom");
$italy = new Country("Italy");
$netherlands = new Country("Netherlands");
$turquie= new Country("Turquie");


// Création des clubs réels
$psg = new Club("Paris Saint-Germain", "1970", $france);
$barca = new Club("FC Barcelona", "1899", $spain);
$realMadrid = new Club("Real Madrid", "1902", $spain);
$juventus = new Club("Juventus", "1897", $italy);
$manUnited = new Club("Manchester United", "1878", $uk);
$ajax = new Club("Ajax Amsterdam", "1900", $netherlands);
$chelsea = new Club("Chelsea", "1905", $uk); 
$gala = new Club("Galatasaray", "1905", $turquie); 

// Création des joueurs célèbres
$mbappe = new Player("Kylian", "Mbappé", "France", new DateTime("1998-12-20"));
$messi = new Player("Lionel", "Messi", "Argentina", new DateTime("1987-06-24"));
$ronaldo = new Player("Cristiano", "Ronaldo", "Portugal", new DateTime("1985-02-05"));
$neymar = new Player("Junior", "Neymar", "Brazil", new DateTime("1992-02-05"));
$rashford = new Player("Marcus", "Rashford", "United Kingdom", new DateTime("1997-10-31"));
$maestro7 = new Player("Hakim", "Ziyech", "Morocco", new DateTime("1993-03-19"));


// Création des carrières pour chaque joueur dans les clubs où ils ont joué
$messiCareer1 = new Carreer($barca, "2004", $messi, "2021");
$messiCareer2 = new Carreer($psg, "2021", $messi);

$ronaldoCareer1 = new Carreer($manUnited, "2003", $ronaldo, "2009");
$ronaldoCareer2 = new Carreer($realMadrid, "2009", $ronaldo, "2018");
$ronaldoCareer3 = new Carreer($juventus, "2018", $ronaldo, "2021");
$ronaldoCareer4 = new Carreer($manUnited, "2021", $ronaldo);

$mbappeCareer = new Carreer($psg, "2017", $mbappe);
$neymarCareer = new Carreer($psg, "2017", $neymar);

$ziyechCareer1 = new carreer($ajax, "2016", $maestro7, "2020");
$ziyechCareer2 = new carreer($chelsea, "2020", $maestro7, "2023");
$ziyechCareer3 = new carreer($gala, "2023", $maestro7);

$rashfordCareer = new Carreer($manUnited, "2016", $rashford);

// Ajout des joueurs aux clubs respectifs
$psg->addPlayer($mbappe, 2017);
$psg->addPlayer($messi, 2021);
$psg->addPlayer($neymar, 2017);

$barca->addPlayer($messi, 2004);

$realMadrid->addPlayer($ronaldo, 2009);

$juventus->addPlayer($ronaldo, 2018);

$manUnited->addPlayer($ronaldo, 2003);
$manUnited->addPlayer($ronaldo, 2021);
$manUnited->addPlayer($rashford, 2016);

$ajax->addPlayer($maestro7, 2016);
$chelsea->addPlayer($maestro7, 2020);
$gala->addPlayer($maestro7, 2023);

?>

<div id='containerCountry'>

<?php
// Affichage des clubs par pays
echo $france->afficherClub();
echo $spain->afficherClub();
echo $uk->afficherClub();
echo $italy->afficherClub().'<br><br><br>';


?>

</div>


<div id='containerClub'>

<?php

echo $psg->afficherPlayers();
echo $barca->afficherPlayers();
echo $realMadrid->afficherPlayers();
echo $juventus->afficherPlayers();
echo $manUnited->afficherPlayers();
echo $ajax->afficherPlayers();
echo $chelsea->afficherPlayers();   
echo $gala->afficherPlayers();   
?>

</div>

<div id='containerCarreer'>

<?php
echo $mbappe->afficherCareer();
echo $messi->afficherCareer();
echo $ronaldo->afficherCareer();
echo $neymar->afficherCareer();
echo $rashford->afficherCareer();
echo $maestro7->afficherCareer();

?>

</div>

 <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
 
</body>
</html>
