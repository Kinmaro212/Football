<?php
class Carreer {
    private Club $clubs;            // On appelle la classe club
    private string $anneeDebut;     // Date du début de contrat
    private string $anneeFin;       // Date de fin de contrat
    private Player $player;         // On appelle la classe player

    // Constructeur : Initialise la carrière avec un club, une année de début, un joueur et une année de fin par défaut.
    public function __construct(Club $clubs, string $anneeDebut, Player $player, string $anneeFin = "en cours" ) {
        $this->clubs = $clubs;
        $this->anneeDebut = $anneeDebut;
        $this->anneeFin = $anneeFin;
        $this->player = $player;
        $this->player->addCareer($this);
    }

  // Getters et setters pour accéder et modifier les propriétés de la carrière
    public function getClubs() {
        return $this->clubs;
    }

    public function setClubs(Club $clubs) {
        $this->clubs = $clubs;
    }

    public function getAnneeDebut() {
        return $this->anneeDebut;
    }

    public function setAnneeDebut(string $anneeDebut) {
        $this->anneeDebut = $anneeDebut;
    }

    public function getAnneeFin() {
        return $this->anneeFin;
    }

    public function setAnneeFin(string $anneeFin) {
        $this->anneeFin = $anneeFin;
    }

    // Méthode __toString pour afficher l'objet sous forme de chaîne
    public function __toString(): string {
        return "Carrière : Club - {$this->clubs->getClubName()}, Année de début - {$this->anneeDebut}, Année de fin - {$this->anneeFin}";
    }
}
