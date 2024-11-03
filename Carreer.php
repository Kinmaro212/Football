<?php

class carreer{
        private Club $club;
        private int $annee_debut;
        private ?int $annee_fin;
       }
       
        /* ? devant le type int dans ?int $annee_fin signifie que cette propriété  peut être de type int ou null. 
        Cela permet de représenter un cas où l'année de fin n'est pas encore définie ou n'est pas applicable
        (par exemple, si le joueur est toujours actif dans le club).
