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
        $country->addClub($this);                                                           //Quand je crée un club, le club est ajouter dans country
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

    public function getAnneeCreation() {
        return $this->anneeCreation;
    }

    public function setAnneeCreation(array $anneeCreation) {
        $this->anneeCreation = $anneeCreation;
    }


    
    // Method to add players with start year
    public function addPlayer(Player $player, int $startYear) {
        $this->players[] = ["player" => $player, "startYear" => $startYear];
    }



    // Method to list players with name, age, and nationality
    public function afficherPlayers(): string {
        // Structure HTML de base pour le bloc des joueurs
        $result = "<div class ='uk-card uk-card-default uk-card-hover uk-card-body '>".  "<h2>".  $this->clubName. "</h2>";
        
        // Boucle pour ajouter chaque joueur avec son année de début
            $result.= "<div class=nameClub >";
            
            $result.= "<p>" .$this->getCountry().' '.$this->anneeCreation."</p></div> ";
         
            foreach($this->players as $p){
                $player = $p["player"]; 
                $date = $p["startYear"]; // On a acceder a un champs d'une case du tableaux de add player
                $result.= "<div class=player>" .$player->getPlayerName().' '.$date. " </div> ";
            }   
        
        $result .= "</div>"; // Ferme la div principale de tous les joueurs
        
        return $result;
    }


    
    // toString method
    public function __toString(): string {
        return "Club: {$this->clubName}, Country: {$this->country}, Players: " ;
    }
}


