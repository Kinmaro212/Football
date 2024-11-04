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
        $this->carriere = [];
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
    public function getCarriere(): array {
        return $this->carriere;
    }
    public function setCarriere(array $carriere) {
        $this->carriere = $carriere;
    }


    // Method to add team and start year to career
    public function addCareer(Club $club, int $startYear): void {
        $this->carriere[] = ["club" => $club, "startYear" => $startYear];
    }

    // Method to calculate age
    public function getAge(): int {
        $now = new DateTime();
        return $now->diff($this->dateBirth)->y;
    }

    // Method to list career
    public function getCareer(): array {
        $careerDetails = [];
        foreach ($this->carriere as $career) {
            $careerDetails[] = [
                'club' => $career["club"]->getClubName(),
                'startYear' => $career["startYear"]
            ];
        }
        return $careerDetails;
    }


    public function __toString(): string {
        return "Player: $this->playerSurname $this->playerName, Country: $this->country, Date of Birth: " . $this->dateBirth->format('Y-m-d');
    }
}