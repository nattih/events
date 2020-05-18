<?php
require("../Modele/Modele.php");
require("../Modele/autolaod.php");

$admin=new AdmiManager();
$bd = new Db();
$base = $bd -> getBase();

if (isset($_POST['formulaire']))
{
    
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) 
    {
        $nomlength = strlen($nom);
        if ($nomlength <= 255) 
        {
            if ($mail == $mail2) 
            {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
                {
                    $reqmail =$base->prepare('SELECT * FROM admin WHERE mail=?');
                    $reqmail->execute(array($mail));
                    $mailexixte = $reqmail->rowCount();
                    if ($mailexixte == 0) {
                      
                        if ($mdp == $mdp2) 
                        {
                            $admin->enregistrer();
                            $msg = 'votre compte a bien ete creer';                          
                        }
                        else 
                        {
                            $msg = 'les mots de passe ne correspondent pas';
                        }                      
                    }
                    else {
                        $msg = 'Mail deja utiliser'; 
                    }
                }
                else 
                {
                     $msg = 'Votre adresse mail n\'est pas valide !';  
                }
            }
            else 
            {
                $msg = 'les mails ne correspondent pas';
            }
        }

        else 
        {
            $msg = 'votre speudo ne doit pas depasser 255 caractere';
        }
    } 
    else
    {    
      $msg = 'Tout les champs doivent etre renseigner';  
    }
}


$contenu="../Vue/Form_Insert_admi.php";
require("../Vue/Gabari.php");

