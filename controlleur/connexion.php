<?php
session_start();
require("../Modele/Modele.php");
require("../Modele/autolaod.php");

$admin=new AdmiManager();
$bd = new Db();
$base = $bd -> getBase();

if (isset($_POST['formconnexion'])) 
        {
            $mailconnect =   htmlspecialchars($_POST['mailconnect']);
            $mdpconnect = sha1($_POST['mdpconnect']);
            if (!empty($mailconnect) AND !empty($mdpconnect)) 
            {
                $requser = $base->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ?");
                $requser->execute(array($mailconnect, $mdpconnect));
                $userexiste = $requser->rowCount();
                if ($userexiste==1) 
                {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['nom'] = $userinfo['nom'];
                    $_SESSION['prenom']= $userinfo['prenom'];
                    $_SESSION['mail']= $userinfo['mail'];
                    
                    header('location: vueAffiche.php');
                } 
                else 
                {
                    $msg = "L'identifiant ou le mot de passe est incorrect";
                }
            }
            else 
            {
                $msg = "Tous les chalps doivent etre complété !";
            }
        }


$contenu="../Vue/connexion.php";
require("../Vue/Gabari.php");
