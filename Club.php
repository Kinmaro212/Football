<?php

class Club {
    private string $clubName;
    private string $anneeCreation;
    private Country $country;
    private array $players;
    private array $carrieres;



    public function __construct(string $clubName,string $anneeCreation , Country $country) {
        $this->clubName = $clubName;
        $this->country = $country;
        $this->anneeCreation = $anneeCreation;
        $this->players = [];
        $country->addClub($this);
    }

   

    // Getters
    public function getClubName(): string {
        return $this->clubName;
    }
    // Setters
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

    public function getAnneeCreation(): array {
        return $this->anneeCreation;
    }

    public function setAnneeCreation(array $anneecreation) {
        $this->anneeCreation = $annneCreation;
    }

    // Method to add a club to the country
    public function addClub(Club $club) {
        $this->clubs[] = $club;
    }

    // Method to list clubs in this country
    public function getClubNames(): array {
        $clubNames = [];
        foreach ($this->clubs as $club) {
            $clubNames[] = $club->getClubName();
        }
        return $clubNames;
    } 
    
    // Method to add players with start year
    public function addPlayer(Player $player, int $startYear) {
        $this->players[] = ["player" => $player, "startYear" => $startYear];
    }

    // Method to list players with name, age, and nationality
    public function getPlayersDetails(): array {
        $playersDetails = [];
        foreach ($this->players as $playerInfo) {
            $player = $playerInfo["player"];
            $age = $player->getAge();
            $playersDetails[] = [
                'name' => $player->getPlayerName(),
                'surname' => $player->getPlayerSurname(),
                'age' => $age,
                'nationality' => $player->getNationality()
            ];
        }
        return $playersDetails;
    }
    // toString method
    public function __toString(): string {
        return "Club: {$this->clubName}, Country: {$this->country}, Players: " ;
    }
}


