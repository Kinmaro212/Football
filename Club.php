<?php
class Club {
    private string $clubName;            // Nom du club
    private string $anneeCreation;       // Année de création du club
    private Country $country;            // On appelle la classe club
    private array $players;              // On appelle la classe club
    private array $carrieres;            // On appelle la classe club

    // Constructeur : Initialise un club avec son nom, l'année de création, et son pays.
    public function __construct(string $clubName, string $anneeCreation, Country $country) {
        $this->clubName = $clubName;
        $this->country = $country;
        $this->anneeCreation = $anneeCreation;
        $this->players = [];
        $country->addClub($this);
    }

    // Getters et setters pour accéder et modifier les propriétés du club
    public function getClubName(): string {
        return $this->clubName;
    }

    public function setClubName(string $clubName) {
        $this->clubName = $clubName;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function setCountry(string $country) {
        $this->country = $country;
    }

    public function getPlayers(): array {
        return $this->players;
    }

    public function setPlayers(array $players) {
        $this->players = $players;
    }

    public function getAnneeCreation() {
        return $this->anneeCreation;
    }

    public function setAnneeCreation(array $anneeCreation) {
        $this->anneeCreation = $anneeCreation;
    }

    // Méthode pour ajouter un joueur à un club avec son année de début
    public function addPlayer(Player $player, int $startYear) {
        $this->players[] = ["player" => $player, "startYear" => $startYear];
    }

    // Affichage des joueurs d'un club avec leurs détails dans une structure HTML
    public function afficherPlayers(): string {
        $result = "<div class ='uk-card uk-card-default uk-card-hover uk-card-body '><h2>" . $this->clubName . "</h2>";
        $result .= "<div class=nameClub >";
        $result .= "<p>" . $this->getCountry() . ' ' . $this->anneeCreation . "</p></div> ";
        foreach ($this->players as $p) {
            $player = $p["player"];
            $date = $p["startYear"];
            $result .= "<div class=player>" . $player->getPlayerName() . ' ' . $date . " </div> ";
        }
        $result .= "</div>";
        return $result;
    }

    // Méthode __toString pour représenter l'objet sous forme de chaîne
    public function __toString(): string {
        return "Club: {$this->clubName}, Country: {$this->country}, Players: ";
    }
}
?>