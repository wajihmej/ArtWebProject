<?php
class Promotion{
    private $id;
    private $date_promotion;
    private $reduction;
    private $id_event;

    public function __construct($date_promotion,$reduction,$id_event){
        $this->date_promotion=$date_promotion;
        $this->reduction=$reduction;
        $this->id_event=$id_event;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getDatePromotion()
    {
        return $this->date_promotion;
    }


    public function setDatePromotion($date_promotion)
    {
        $this->date_promotion = $date_promotion;
    }


    public function getReduction()
    {
        return $this->reduction;
    }


    public function setReduction($reduction)
    {
        $this->reduction = $reduction;
    }


    public function getIdEvent()
    {
        return $this->id_event;
    }


    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;
    }



}

?>
