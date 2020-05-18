<?php
require_once ("../Modele/Db.php");
require_once ("../Modele/Evenement.class.php");
require_once ("../Modele/EvenManager.class.php");
 $db=new Db();
 $base=$db->getBase();
 
 if(isset($_POST['categorie']) and $_POST['nom'] and $_POST['date_debut'] and
    $_POST['date_fin'] and $_POST['organisateur'] and $_POST['descriptions'] and $_FILES['photo'])
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],'../images/picture/'.$_POST['nom'].'.jpg');
    $_POST['photo']='../images/picture/'.$_POST['nom'].'.jpg';
    $evenManager=new EvenManager($base);
    $event=new Evenement($_POST);
    $evenManager->add($event);
    header("location: liste.php");
  }
    require_once('../Vue/inser_up.vue.php');
?>