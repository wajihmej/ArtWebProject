<?PHP
include_once "../config.php";

class PromotionC {
    function addPromotion($promotion){
        $sql="INSERT INTO promotion (date_promotion,reduction,id_event) VALUES (:date_promotion,:reduction,:id_event)";

        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $req->bindValue(':date_promotion',$promotion->getDatePromotion());
            $req->bindValue(':reduction',$promotion->getReduction());
            $req->bindValue(':id_event',$promotion->getIdEvent());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function getPromotionsByEvent($id_event){
        $sql="SELECT * FROM promotion WHERE id_event='$id_event'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function deletePromotion($id){
        $sql="DELETE FROM promotion where id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function getPromotionById($id){
        $sql="SELECT * FROM promotion WHERE id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function updatePromotion($promotion){
        $sql="UPDATE promotion SET date_promotion=:date_promotion,reduction=:reduction,id_event=:id_event WHERE id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':date_promotion',$promotion->getDatePromotion());
            $req->bindValue(':reduction',$promotion->getReduction());
            $req->bindValue(':date_debut',$promotion->getIdEvent());
            $req->bindValue(':id',$promotion->getId());
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }



}

?>


