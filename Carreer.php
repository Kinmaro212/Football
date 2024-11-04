<?php

class carreer{
        private Club $club;
        private int $anneedebut;
        private ?int $anneefin;

        public function __construct(Club $club,string $anneeDebut , string $anneeFin ="en cours") {
                $this-> club = $club;
                $this->anneeDebut = $anneeDebut;
                $this->anneeFin = $anneeFin;
            }



	public function  getClub() {
		return $this->$club;
	}

	public function  setClub(Club $club) {
		$this->$club = $club;
	}

	public function getAnneeDebut() {
		return $this->$anneeDebut;
	}

	public function  setAnneeDebut(int $anneeDebut) {
		$this->$annee_debut = $anneeDebut;
	}

	public function  getAnnee_fin() {
		return $this->$anneeFin;
	}

	public function  setAnnee_fin(?int $anneeFin) {
		$this->$anneeFin = $anneeFin;
	}

       }
       
        /* ? devant le type int dans ?int $annee_fin signifie que cette propriété  peut être de type int ou null. 
        Cela permet de représenter un cas où l'année de fin n'est pas encore définie ou n'est pas applicable
        (par exemple, si le joueur est toujours actif dans le club).*§private array $carriere = [];*/
