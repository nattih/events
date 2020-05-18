<?php
class AdmiManager extends Modele
{
   
    function connexion($mailconnect, $mdpconnect){
        $aut=$this->base->prepare("SELECT * FROM admin WHERE mail=:mail AND motdepasse=:mdp");
        $aut->execute(array(
            "mail"=>$mail,
            "mdp"=>$mdpconnect
        ));
    }

    public function enregistrer()
    {
        $inserer=$this->base->prepare("INSERT INTO admin(nom, prenom, mail, motdepasse) VALUES(:nom,:prenom,:mail,:motdepasse)");
        $inserer->execute(array(
            "nom"=>$_POST['nom'],
            "prenom"=>$_POST['prenom'],
            "mail"=>$_POST['mail'],
            "motdepasse"=>$_POST['motdepasse']
        ));
    }

    function changePassWord($newmdp,$mail){

        $change=$this->base->prepare("UPDATE admin SET motdepasse=:newmdp WHERE mail=:mail");
        $change->execute(array(
            "newmdp"=>sha1($newmdp),
            "motdepasse"=>$mail
        ));
    }
}