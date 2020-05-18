<?php
require("../Modele/Evenement.class.php");
require("../Modele/EvenManager.class.php");
require("../Modele/Db.php");
$db=new Db();
$base=$db->getBase();
$events=new EvenManager();
$eventliste=$events->liste();
 
if(isset($_GET['id']))
  {
      $events->supprimer($_GET['id']);
  }

require_once('../Vue/liste.vue.php');