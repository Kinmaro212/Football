<?php

class Player { 
    // Propriétés privées pour stocker les informations du joueur
    private string $playerSurname; // Nom de famille du joueur
    private string $playerName;    // Prénom du joueur
    private string $country;       // Pays d'origine du joueur
    private DateTime $dateBirth;   // Date de naissance du joueur
    private array $carrieres;      // Liste des carrières du joueur (équipes et années)

    // Constructeur pour initialiser les informations de base du joueur
    public function __construct(string $playerSurname, string $playerName, string $country, DateTime $dateBirth) {
        $this->playerSurname = $playerSurname;
        $this->playerName = $playerName;
        $this->country = $country;
        $this->dateBirth = $dateBirth;
        $this->carrieres = []; // Initialisation de la carrière à un tableau vide
    }

    // Getters et setters pour accéder et modifier les propriétés du joueur
    public function getPlayerSurname(): string {
        return $this->playerSurname;
    }

    public function setPlayerSurname(string $playerSurname) {
        $this->playerSurname = $playerSurname;
    }

    public function getPlayerName(): string {
        return $this->playerName;
    }

    public function setPlayerName(string $playerName) {
        $this->playerName = $playerName;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function setCountry(string $country) {
        $this->country = $country;
    }

    public function getDateBirth(): DateTime {
        return $this->dateBirth;
    }

    public function setDateBirth(DateTime $dateBirth) {
        $this->dateBirth = $dateBirth;
    }

    public function getCarrieres(): array {
        return $this->carrieres;
    }

    public function setCarrieres(array $carrieres) {
        $this->carrieres = $carrieres;
    }

    // Méthode pour ajouter une nouvelle carrière (équipe et année de début) au joueur
    public function addCareer(Carreer $carreer) {
        $this->carrieres[] = $carreer;
    }

    // Méthode pour calculer l'âge du joueur à partir de sa date de naissance
    public function getAge(): int {
        $now = new DateTime();
        return $now->diff($this->dateBirth)->y;
    }

    // Méthode pour lister les détails de la carrière du joueur
    public function getCareer(): array {
        $careerDetails = [];
        foreach ($this->carrieres as $career) {
            $careerDetails[] = [
                'club' => $career->getClubs()->getClubName(), // Nom du club
                'anneeDebut' => $career->getAnneeDebut(),     // Année de début
                'anneeFin' => $career->getAnneeFin()          // Année de fin
            ];
        }
        return $careerDetails;
    }

    // Méthode pour afficher la carrière du joueur avec un format HTML stylisé
    public function afficherCareer() {
        $result = "<div class='uk-card uk-card-default uk-card-hover uk-card-body '>" . "<h2>" . $this->playerName . "</h2>";
        foreach ($this->carrieres as $carreer) {
            $clubName = $carreer->getClubs()->getClubName();
            $result .= "<p>" . $clubName . "</p>";
        }
        $result .= "</div><br>";
        return $result;
    }    

    // Méthode magique pour renvoyer une chaîne descriptive du joueur (nom, pays, et date de naissance)
    public function __toString(): string {
        return "Player: $this->playerSurname $this->playerName, Country: $this->country, Date of Birth: " . $this->dateBirth->format('Y-m-d');
    }
}