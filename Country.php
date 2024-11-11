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

    // Getter pour le nom du pays
    public function getCountryName(): string {
        return $this->countryName;
    }

    // Setter pour le nom du pays
    public function setCountryName(string $countryName) {
        $this->countryName = $countryName;
    }

    // Getter pour la liste des clubs
    public function getClubs(): array {
        return $this->clubs;
    }

    // Setter pour la liste des clubs
    public function setClubs(array $clubs) {
        $this->clubs = $clubs;
    }

    // Getter pour la liste des joueurs
    public function getPlayers(): array {
        return $this->players;
    }

    // Setter pour la liste des joueurs
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