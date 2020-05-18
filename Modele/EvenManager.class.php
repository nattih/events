<?php
include_once('Evenement.class.php');

class EvenManager
{
    private $base;
    function __construct()
    {
        $this->base=$GLOBALS["base"];
    }
    public function add(Evenement $events)
    {
     $sql=$this->base->prepare("INSERT INTO evenement(categorie,nom,date_debut,date_fin,organisateur,descriptions,photo) 
     VALUES(:categorie,:nom,:date_debut,:date_fin,:organisateur,:descriptions,:photo)");
     $sql->execute(array(
      "categorie"=>$events->categorie,
      "nom"=>$events->nom,
      "date_debut"=>$events->date_debut,
      "date_fin"=>$events->date_fin,
      "organisateur"=>$events->organisateur,
      "descriptions"=>$events->descriptions,
      "photo" =>$events->photo,
    ));
   }

    public function get($id)
   {
     $sql=$this->base->query("SELECT * FROM evenement WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $ev=new Evenement($row);
     return $ev;
   }
   function liste(){
    $even=[];
    $resq=$this->base->query("SELECT * FROM evenement ORDER BY id");
    $donnee=$resq->fetchAll();
    $resq->closeCursor();
    foreach ($donnee as $key=>$donnees){
        $even[$key]=new Evenement($donnees);
    }
    return $even;
    }
}
function supprimer($id)
{
    $resq=$this->base->prepare("DELETE FROM evenement WHERE id=?");
    $resq->execute(array($id));
}
