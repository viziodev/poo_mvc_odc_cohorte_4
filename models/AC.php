<?php 
class AC extends User{

//Attributs navigationnels => attributs issus des associations
  //OneToMany => Inscriptions
  //1ere approche
   private array $inscriptions;

  //2ieme approche
   //fonctions navigationnelles => fonctions issues des associations

   public function inscriptions():array{
       return [];
   }
 public function __construct()
 {
  self::$role="ROLE_AC";
     $this->inscriptions=[];
 } 
 
 
 
}