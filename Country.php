<?php
class Country {
    private string $countryName; 
    private array $players;
    private array $clubs;

    // Constructeur : Initialise le pays, les joueurs et les clubs.
    public function __construct(string $countryName) {
        $this->countryName = $countryName;
        $this->players = [];
        $this->clubs = [];
    }

    // Getters et setters pour accéder et modifier les propriétés du pays
    public function getCountryName(): string {
        return $this->countryName;
    }

    public function setCountryName(string $countryName) {
        $this->countryName = $countryName;
    }

    public function getClubs(): array {
        return $this->clubs;
    }

    public function setClubs(array $clubs) {
        $this->clubs = $clubs;
    }

    public function getPlayers(): array {
        return $this->players;
    }

    public function setPlayers(string $player) {
        $this->players = $player;
    }

    // Méthode pour ajouter un club à un pays
    public function addClub(Club $clubs) {
        $this->clubs[] = $clubs;
    }

    // Méthode pour obtenir les noms des clubs
    public function getClubNames(): array {
        $clubNames = [];
        foreach ($this->clubs as $club) {
            $clubNames[] = $club->getClubName();
        }
        return $clubNames;
    }

    // Affichage des clubs du pays dans une structure HTML
    public function afficherClub() {
        $clubName = $this->getClubNames();
        $result = "<div class ='uk-card uk-card-default uk-card-hover uk-card-body '><h2>" . $this->countryName . "</h2>";
        foreach ($clubName as $clubName) {
            $result .= "<p>" . $clubName . "</p>";
        }
        $result .= "</div><br>";
        return $result;
    }

    // Méthode __toString pour représenter l'objet sous forme de chaîne
    public function __toString(): string {
        return $this->countryName . " - ";
    }
}
?>