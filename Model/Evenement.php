<?php
class Evenement{
    private $id;
    private $nom;
    private $lieu;
    private $date_debut;
    private$date_fin;
    private $informations;
    private $image;

    public function __construct($nom,$lieu,$date_debut,$date_fin,$informations,$image){
        $this->nom=$nom;
        $this->lieu=$lieu;
        $this->date_debut=$date_debut;
        $this->date_fin=$date_fin;
        $this->informations=$informations;
        $this->image=$image;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getLieu()
    {
        return $this->lieu;
    }


    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getInformations()
    {
        return $this->informations;
    }


    public function setInformations($informations)
    {
        $this->informations = $informations;
    }


    public function getDateDebut()
    {
        return $this->date_debut;
    }


    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }


    public function getDateFin()
    {
        return $this->date_fin;
    }

    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }




}

?>
