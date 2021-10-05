<?php
class Article{
    private $id;
    private $titre;
    private $description;
    private $date;
    private $id_client;

    public function __construct($titre,$description,$id_client){
        $this->titre=$titre;
        $this->description=$description;
        $this->id_client=$id_client;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getIdClient()
    {
        return $this->id_client;
    }


    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }


}

?>
