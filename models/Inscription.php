<?php 
class Inscription extends Model{
   //Attributs Instances
     //Attributs navigationnels => attributs issus des associations
    private int $id;
   
    public function __construct()
    {
        self::$table='inscription' ;
    }
    //ManyToOne => AC
   public function ac():AC{
       $sql="select p.* from inscription i,personne 
                      p where  p.id=i.ac_id
                      and p.role like 'ROLE_AC'
                      and i.id=".$this->id ;

       return new AC() ;
   }
    //ManyToOne => AnneeScolaire
    public function anneeScolaire():AnneeScolaire{
         $sql="select a.* from annee_scolaire a,inscription i 
                       where  a.id=i.annee_id
                      and i.id=".$this->id ;
        return new AnneeScolaire() ;
    }


}