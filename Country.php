<?php

class Country {
    private string $countryName;
    private array $players;
    private array $clubs;

    // Constructor
    public function __construct(string $countryName) {
        $this->countryName = $countryName;
        $this ->players = [];
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
    public function setClubs(array $clubs) {

        $this->clubs = $clubs;
    }

    public function getPlayers(): array {

        return $this->players;
    }

    public function setPlayers(string $player) {

        $this->players = $player;
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

        public function afficherClub(){
            $clubName= $this->getClubNames();

             $result="<div class=country>".  "<h2>".  $this->countryName. "</h2>"."</div>";
            $result.= "<div class=nameClub >";
            foreach($clubName as $clubName){
                $result.= "<p>" .$clubName."</p>";
            }   
             $result.="</div>";
             return $result;
        }  
   

            //Ce tableau contient tout les nom de club du pays, 
            // mtn il faut parcourir ce tableau et mettre chaque élément dans une div par exemple hotel
            //$result.= ajouter div ouvre div .nom de lelement exemple $name.</div> 
            // a chaque itération de la boucle ensuite on return le result tout a la fin de la boucle 
            // la premiere ligne du résult c'est le nom du pays il faut mettre une balise titre 
            //decommenter la derniere ligne d'index 
           // toString method
    public function __toString(): string {
        
        return "Country: $this->countryName, Clubs: " ;
    }

}