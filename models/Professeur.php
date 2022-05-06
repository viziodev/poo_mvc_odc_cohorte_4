<?php 
class Professeur extends Personne{
  
    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }
//Fonctions navigationnelles
//ManyToMany avec Classe
public function classes():array{
    return [];
}



}