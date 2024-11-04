<?php

class Country {
    private string $countryName;
    private array $players;
    private array $clubs;

    // Constructor
    public function __construct(string $countryName) {
        $this->countryName = $countryName;
        $this ->players = $players = [];
        $this->clubs = [] ;

    }

    // Getters
    public function getCountryName(): string {

        return $this->countryName;

    }
    public function setCountryName(string $countryName) {

        $this->countryName = $countryName;

    }
    public function getClubs(): array {

        return $this->clubs;

    }
    public function setClubs(array $club) {

        $this->clubs = $clubs;
    }

    public function getPlayer(): string {

        return $this->player;
    }

    public function setPlayer(string $player) {

        $this->player = $player;
    }

        // Method to add a club to the country
        public function addClub(Club $clubs) {

            $this->clubs[] = $clubs;
        }
    
        // Method to list clubs in this country
        public function getClubNames(): array {

            $clubNames = [];

            foreach ($this->clubs as $club) {

                $clubNames[] = $club->getClubName();
            }

            return $clubNames;
        } 

    // toString method
    public function __toString(): string {
        
        return "Country: $this->countryName, Clubs: " ;
    }

}