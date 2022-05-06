<?php 
class Classe extends Model{

    public function __construct()
    {
        self::$table='classe' ;
    }

    //Fonctions navigationnelles
//ManyToMany avec Professeur
public function professeurs():array{
    return [];
}


}