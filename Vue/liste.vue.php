<?php 
include('../stylesheet.php');
include_once('../controlleur/liste.php');
include_once('../Modele/Evenement.class.php');
include_once('../Modele/EvenManager.class.php');
?>
  <p>liste des evenements</p>
  <a href="inser_up.php" class="btn btn-success">Ajouter evenement</a>
  <table class="table table-bordered table-striped table-responsive">
  <thead>
     <th>Categorie </th>
     <th>Nom</th>
     <th>date_debut</th>
     <th>date_fin</th>
     <th>Organisateur</th>
     <th>Description</th>
     <th>Option </th>
  </thead>
  <tbody>
      <?php
      foreach ($eventliste as $events) {
      ?>
      <tr>
        <td ><?php echo $events->categorie;?> </td>
        <td ><?php echo $events->nom; ?> </td>
        <td ><?php echo $events->date_debut;?></td>
        <td ><?php echo $events->date_fin;?></td>
        <td ><?php echo $events->organisateur;?></td>
        <td><?php echo $events->descriptions;?></td>
        <td>
        <a href="editEvent.php?id_event=<?= $value->id_event?>" class="btn btn-success">Update</a>
        <a href="liste.php?id=<?= $value->id?>" class="btn btn-danger">Delete</a>
         </td>
         <?php
        }
        ?>
         <tbody>
</table>
