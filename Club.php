<?php
class Club {
    private string $clubName;
    private string $anneeCreation;
    private Country $country;
    private array $players;
    private array $carrieres;

    // Constructeur : Initialise un club avec son nom, l'année de création, et son pays.
    public function __construct(string $clubName, string $anneeCreation, Country $country) {
        $this->clubName = $clubName;
        $this->country = $country;
        $this->anneeCreation = $anneeCreation;
        $this->players = [];
        $country->addClub($this);
    }

    // Getter pour le nom du club
    public function getClubName(): string {
        return $this->clubName;
    }

    // Setter pour le nom du club
    public function setClubName(string $clubName) {
        $this->clubName = $clubName;
    }

    // Getter pour le pays du club
    public function getCountry(): string {
        return $this->country;
    }

    // Setter pour le pays du club
    public function setCountry(string $country) {
        $this->country = $country;
    }

    // Getter pour la liste des joueurs du club
    public function getPlayers(): array {
        return $this->players;
    }

    // Setter pour la liste des joueurs du club
    public function setPlayers(array $players) {
        $this->players = $players;
    }

    // Getter pour l'année de création du club
    public function getAnneeCreation() {
        return $this->anneeCreation;
    }

    // Setter pour l'année de création du club
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