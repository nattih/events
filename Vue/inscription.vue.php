<div class="row h-100">
    <?php 
        if (isset($msg)) 
        {
            echo '<font color="red">' .$msg.'</font>';
        }
    ?>
<form class="d-flex flex-column justify-content-between align-items-center form m-5 pt-5 pb-5" action="" method="POST">
    <div class="form-group w-100">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Veillez entrer un nom">
    </div>
    <div class="form-group w-100">
        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Veillez entrer un prenom">
    </div>
    <div class="form-group w-100">
        <label for="mail">Veillez saisir un mail:</label>
        <input type="email" class="form-control" id="mail" name="mail" placeholder="Veillez entrer un mail">
    </div>
    <div class="form-group w-100">
    <label for="mail2">Confirmez votre mail:</label>
        <input type="email" class="form-control" id="mail2" name="mail2" placeholder="Veillez confirmer le mail">
    </div>
    <div class="form-group w-100">
    <label for="mdp">Veillez saisir votre mot de passe:</label>
        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Veillez entrer un mot de pass">
    </div>
    <div class="form-group w-100">
    <label for="mdp2">Confirmer votre mail:</label>
        <input type="password" class="form-control" id="mdp2" name="mdp2" placeholder="Veillez confirmer votre mot de passe">
    </div>
    <div class="form-group w-100">
        <input type="submit" value="S'inscrir" name=formulaire>
    </div>
</form>
</div>