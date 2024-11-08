<?php

class Player {
    private string $playerSurname;
    private string $playerName;
    private string $country;
    private DateTime $dateBirth;
    private array $carrieres;

    // Constructor
    public function __construct(string $playerSurname, string $playerName, string $country, DateTime $dateBirth) {
        $this->playerSurname = $playerSurname;
        $this->playerName = $playerName;
        $this->country = $country;
        $this->dateBirth = $dateBirth;
        $this->carrieres = [];
    }

    // Getters
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


    // Method to add team and start year to career
    public function addCareer(Carreer $carreer) {
        $this->carrieres[] = $carreer;
    }

    // Method to calculate age
    public function getAge(): int {
        $now = new DateTime();
        return $now->diff($this->dateBirth)->y;
    }

    // Method to list career
    public function getCareer(): array {
        $careerDetails = [];
        foreach ($this->carrieres as $career) {
            $careerDetails[] = [
                'club' => $career->getClubs()->getClubName(),
                'anneeDebut' => $career->getAnneeDebut(),
                'anneeFin' => $career->getAnneeFin()
            ];
        }
        return $careerDetails;
    }


    public function afficherCareer() {


        $result= "<div class ='uk-card uk-card-default uk-card-hover uk-card-body '>". "<h2>".  $this->playerName. "</h2>";
        foreach($this->carrieres as $carreer){
            $clubName = $carreer->getClubs()->getClubName();
            $startYear = $carreer->getAnneeDebut();
            $endYear = $carreer->getAnneeFin() ;

            $result.= "<p>" .$clubName."</p>";
        }
        $result.="</div><br>";
        return $result;
        }    
    


    public function __toString(): string {
        return "Player: $this->playerSurname $this->playerName, Country: $this->country, Date of Birth: " . $this->dateBirth->format('Y-m-d');
    }
}