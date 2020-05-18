<?php 
    if (isset($msg)) 
    {
        echo '<font color="red">' .$msg.'</font>';
    }
?>


<div class="d-flex justify-content-center align-items-center h-100">
  <form class="d-flex flex-column justify-content-between align-items-center form mt-5 w-25 pt-5 pb-5 form-auth" action="" method="post">
    <div class="form-group">
      <input type="email" placeholder="Numero de telephone" name="mailconnect">
    </div>
    <div class="form-group">
      <input type="password" placeholder="Mot de passe" name="mdpconnect">
    </div>
    <div class="form-group">
      <input class="w-100" type="submit" value="Se connecter" name="formconnexion">
    </div>
    <div class="form-group">
        <a href="../Controlleur/inscription.php" class="w-100" >S'inscrir ici</a>
    </div>
  </form>
</div>