<?php

require_once 'Modele/Modele.php';


class ComManager extends Modele
{
    public function getCommentaires($id_even)
    {
        $sql = 'SELECT * FROM commentaire FROM id_even = ?';
        $commentaires = $this->executeRequete($sql, array($id_even));
        return $commentaires;
    }

    public function insertCommentaire($pseudo, $contenu, $id_even)
    {
        $sql = 'INSERT INTO commentaire(id_even, pseudo, contenu)  values(?,?,?)';
        $this->executeRequete($sql, array($id_even, $pseudo, $contenu ));
    }
}