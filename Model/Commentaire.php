<?php
class Commentaire{
    private $id;
    private $commentaire;
    private $id_client;
    private $id_article;

    public function __construct($commentaire,$id_client,$id_article){
        $this->commentaire=$commentaire;
        $this->id_client=$id_client;
        $this->id_article=$id_article;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCommentaire()
    {
        return $this->commentaire;
    }


    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
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


    public function getIdArticle()
    {
        return $this->id_article;
    }


    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
    }




}

?>
