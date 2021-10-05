<?PHP
include ("../config.php");

class EvenementC {
    function addEvent($evenement){
        $sql="INSERT INTO evenement (nom,lieu,date_debut,date_fin,informations,image) VALUES (:nom,:lieu,:date_debut,:date_fin,:informations,:image)";

        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $req->bindValue(':nom',$evenement->getNom());
            $req->bindValue(':lieu',$evenement->getLieu());
            $req->bindValue(':date_debut',$evenement->getDateDebut());
            $req->bindValue(':date_fin',$evenement->getDateFin());
            $req->bindValue(':informations',$evenement->getInformations());
            $req->bindValue(':image',$evenement->getImage());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function rechercherTicket($str){
        $sql="select * from evenement where nom like '".$str."%' or lieu like '".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }

    function getEvents(){
        $sql="SELECT * FROM evenement";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function deleteEvent($id){
        $sql="DELETE FROM evenement where id=:id";
        $db = config::getConnexion();
        try{
            $liste=$db->query("SELECT * FROM promotion where id_event='$id'");
            foreach ($liste as $row){
                $req1=$db->prepare("DELETE FROM promotion where id=:id");
                $req1->bindValue(':id',$row['id']);
                $req1->execute();
            }

            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function getEventById($id){
        $sql="SELECT * FROM evenement WHERE id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function updateEvent($evenement){
        $sql="UPDATE evenement SET nom=:nom,lieu=:lieu,date_debut=:date_debut,date_fin=:date_fin,informations=:informations WHERE id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':nom',$evenement->getNom());
            $req->bindValue(':lieu',$evenement->getLieu());
            $req->bindValue(':date_debut',$evenement->getDateDebut());
            $req->bindValue(':date_fin',$evenement->getDateFin());
            $req->bindValue(':informations',$evenement->getInformations());
            $req->bindValue(':id',$evenement->getId());
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }



}

?>


