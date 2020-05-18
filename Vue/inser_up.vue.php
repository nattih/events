<?php
include('../stylesheet.php');
?>
<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="ajout">AJOUTER UN EVENEMENT</h5>
                            <form  action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="categorie" class="col-md-4 col-form-label  ">CATEGORIE :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="categorie">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label ">NOM :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nom">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date_debut" class="col-md-4 col-form-label  ">DATE DEBUT :</label>
                                    <div class="col-md-8">
                                        <input type="date"  class="form-control" name="date_debut">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date_fin" class="col-md-4 col-form-label  ">DATE FIN :</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" name="date_fin">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="organisateur" class="col-md-4 col-form-label  ">ORGANISATEUR :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="organisateur" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="descript" class="col-md-4 col-form-label  ">DESCRIPTION :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="descriptions">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo" class="col-md-4 col-form-label  ">PHOTO :</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="photo">
                                    </div>
                                </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn enreg btn-primary">ENREGISTRER</button>
                                        <button type="reset" class="btn btn-danger">ANNULER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
        </div>
    </div>
      <script type="text/javascript" src="../styles/js/bootstrap.min.js"></script>
</body>