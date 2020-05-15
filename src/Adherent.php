<?php

class Adherent {

    private $identifiant;

    public function __construct($prenom, $nom, $date_de_naissance) {
        $this->identifiant = self::capitalisation($prenom, $nom, $date_de_naissance);
    } 
   
    public static function concatenate($prenom, $nom, $date_de_naissance) {
        return $prenom.$nom.$date_de_naissance->format('Y-m-d');
    }

    public static function capitalisation($prenom, $nom, $date_de_naissance) {
        return strtoupper($prenom.$nom.$date_de_naissance->format('Y-m-d'));
    }
}