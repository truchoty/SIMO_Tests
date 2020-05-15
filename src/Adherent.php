<?php

class Adherent {
    
    private $identifiant;

    public function __construct($prenom, $nom, $date_de_naissance) {
        $this->identifiant = strtolower($prenom." ".$nom." ".$date_de_naissance->format('Y-m-d'));
    } 
   
}