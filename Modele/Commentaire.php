<?php

class Commentaire
{
    private $id_commentaire;
    private $pseudo;
    private $contenu;

    public function __construck(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) 
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) 
            {
                $this->$methode($value);
            }
        }  
    }

    public function setId($id_commentaire)
    {
        $id_commentaire = (int)$id_commentaire;
        if ($id_commentaire>0) 
        {
            $this->id_commentaire = $id_commentaire;
        }
    }

    public function setPseudo($pseudo)
    {
        if (is_string($pseudo)) 
        {
            $this->pseudo = $pseudo;
        }
    }

    public function setContenu($contenu)
    {
        if (is_string($contenu)) 
        {
            $this->contenu = $contenu;
        }
    }

    public function getId()
    {
        return $this->id_commentaire;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getContenu()
    {
        return $this->contenu;
    }
}