<?php

class carreer{
        private Club $clubs;
        private string $anneeDebut;
        private string $anneeFin;
        private Player $player;

        public function __construct(Club $clubs,string $anneeDebut, Player $player, string $anneeFin = "en cours" ) {
                $this-> clubs = $clubs;
                $this->anneeDebut = $anneeDebut;
                $this->anneeFin = $anneeFin;
                $this->player = $player;
				$this->player->addCareer($this);
            }



	public function  getClubs() {
		return $this->clubs;

	}

	public function  setClubs(Club $clubs) {
		$this->clubs = $clubs;

	}

	public function getAnneeDebut() {
		return $this->anneeDebut;

	}

	public function  setAnneeDebut(string $anneeDebut) {
		$this->anneeDebut = $anneeDebut;
	}

	public function  getAnneeFin() {
		return $this->anneeFin;
	}

	public function  setAnneeFin(string $anneeFin) {
		$this->anneeFin = $anneeFin;
	}



}
       
        /* ? devant le type string dans ?string $annee_fin signifie que cette propriété  peut être de type string ou null. 
        Cela permet de représenter un cas où l'année de fin n'est pas encore définie ou n'est pas applicable
        (par exemple, si le joueur est toujours actif dans le club).*§private array $carriere = [];*/
