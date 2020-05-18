<?php
class Evenement 
{
    // Les variables avec une visibilitée private
    //pour permettre une bonne encapsulation

    private $id;
    private $categorie;
    private $nom;
    private $date_debut;
    private $date_fin;
    private $organisateur;
    private $descriptions;
    private $photo;

     //constructeur

    function __construct($data)
    {
        foreach($data as $key=>$value){
            if(property_exists($this,$key)){
                $this->$key=$value;
                echo $this->$key;
            }
        }
    }

    // les setters
    public function __get($propiete){
        if(property_exists($this,$propiete)){
            return $this->$propiete;
        }
        }

    // les getters
    public function __set($propiete, $value){
        if(property_exists($this,$propiete)){
             $this->$propiete=$value;
        }
        }
}