<?php

class Adherent {

    private $identifiant;

    public function __construct($prenom, $nom, $date_de_naissance) {
        $this->identifiant = self::skip_accents(self::capitalisation($prenom, $nom, $date_de_naissance));
    } 
   
    public static function concatenate($prenom, $nom, $date_de_naissance) {
        return $prenom.$nom.$date_de_naissance->format('Y-m-d');
    }

    public static function capitalisation($prenom, $nom, $date_de_naissance) {
        return strtoupper($prenom.$nom.$date_de_naissance->format('Y-m-d'));
    }

    public static function skip_accents( $str, $charset='utf-8' ) {
 
        $str = htmlentities( $str, ENT_NOQUOTES, $charset );
        
        $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
        $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
        $str = preg_replace( '#&[^;]+;#', '', $str );
        
        return $str;
    }
}