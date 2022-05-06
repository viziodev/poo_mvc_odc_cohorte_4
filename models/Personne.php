<?php 
//Classe Concrete produit des Objets
   //--Methodes concretes, on connait sa definition 
//Classe abstraite qui ne produit pas d' Objets
  //--Methodes concretes, on connait sa definition 
  //--Methodes abstraites,on ne connait pas sa definition 
//Classe finale(sterile) qui ne peuvent pas avoir de classe fille(une realtion de Specialisation)
abstract class Personne extends Model{
    //Attributs Intances =>  
    protected int $id;
    protected string $nomComplet;
    protected static string $role;
    //Attributs classes ou static 
    private static int $nbrePersonne; 
    //Methodes Abstraites

    //Constructeur Par defaut
    public function __construct()
    {
        self::$table='personne' ;
    }

    //Getters 
    public function getId():int{
        return $this->id;
    }
    public function getNomComplet():string{
        return $this->nomComplet;
    }
   //:: Operateur de portee de classe
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }
    //Setters
    public function setId(int $id) :self{
        $this->id=$id;
        return $this;
    }
    public function setNomComplet(string $nomComplet) :self{
        $this->nomComplet=$nomComplet;
        return $this;
    }
    public  static function setNbrePersonne(int $nbrePersonne) :void{
       self::$nbrePersonne=$nbrePersonne;
      
    }

    //Refinition
    public static function findAll():array{
        $sql="select * from personne where role like '".self::$role."'";
        return [];
      }
}