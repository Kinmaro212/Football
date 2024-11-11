<?php
class Carreer {
    private Club $clubs;
    private string $anneeDebut;
    private string $anneeFin;
    private Player $player;

    // Constructeur : Initialise la carrière avec un club, une année de début, un joueur et une année de fin par défaut.
    public function __construct(Club $clubs, string $anneeDebut, Player $player, string $anneeFin = "en cours" ) {
        $this->clubs = $clubs;
        $this->anneeDebut = $anneeDebut;
        $this->anneeFin = $anneeFin;
        $this->player = $player;
        $this->player->addCareer($this);
    }

    // Getter pour le club
    public function getClubs() {
        return $this->clubs;
    }

    // Setter pour le club
    public function setClubs(Club $clubs) {
        $this->clubs = $clubs;
    }

    // Getter pour l'année de début
    public function getAnneeDebut() {
        return $this->anneeDebut;
    }

    // Setter pour l'année de début
    public function setAnneeDebut(string $anneeDebut) {
        $this->anneeDebut = $anneeDebut;
    }

    // Getter pour l'année de fin
    public function getAnneeFin() {
        return $this->anneeFin;
    }

    // Setter pour l'année de fin
    public function setAnneeFin(string $anneeFin) {
        $this->anneeFin = $anneeFin;
    }

    // Méthode __toString pour afficher l'objet sous forme de chaîne
    public function __toString(): string {
        return "Carrière : Club - {$this->clubs->getClubName()}, Année de début - {$this->anneeDebut}, Année de fin - {$this->anneeFin}";
    }
}
       
        /* ? devant le type string dans ?string $annee_fin signifie que cette propriété  peut être de type string ou null. 
        Cela permet de représenter un cas où l'année de fin n'est pas encore définie ou n'est pas applicable
        (par exemple, si le joueur est toujours actif dans le club).*§private array $carriere = [];*/
