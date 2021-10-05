<?php 
require_once "../config.php";
class TableauxC{

    public function afficher($Tableaux){
        $id=$Tableaux->getid();
        $id_utilisateur=$Tableaux->getid_utilisateur();
        $nom=$Tableaux->getNom();
        $prix=$Tableaux->getPrix();
        $informations=$Tableaux->getInformation();

}    
    
    function rechercherTicket($str){
        $sql="select * from Tableaux where categorie like '%".$str."%' or nom like '%".$str."%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }


public function affichernomprenom($id){
    $sql="SELECT * From client where id=$id";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherTableauxs(){
    $sql="SELECT * From Tableaux";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherTableauxWithID($id){
    $sql="SELECT * From Tableaux where id=$id";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}
public function afficherMesTableaux($id){
    $sql="SELECT * From Tableaux where id_utilisateur=$id";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

            //chya3mel update lil immage ama fil asel yajouti fil path
    function UpdateImgTableauximg($id,$image){
        $sql="UPDATE Tableaux SET image=:image WHERE id=:id";
        $db = config::getConnexion();
        try{
        
        $req=$db->prepare($sql);
    
        $req->bindValue(':id',$id);
        $req->bindValue(':image',$image);

        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    function modifierTableaux($Tableaux,$id){
        $sql="UPDATE Tableaux SET nom=:nom,prix=:prix,informations=:informations WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->sTableauxtribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id_utilisateur=$Tableaux->getId_utilisateur();
        $nom=$Tableaux->getNom();
        $prix=$Tableaux->getPrix();
        $informations=$Tableaux->getInformation();
        $datas = array(':id'=>$id, ':nom'=>$nom,':prix'=>$prix,':informations'=>$informations);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':informations',$informations);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

public function ajouterTableaux($Tableaux){
    $sql="insert into Tableaux(id_utilisateur,nom,prix,image,informations) values(:id_utilisateur,:nom,:prix,:image,:informations)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $id_utilisateur=$Tableaux->getId_utilisateur();
        $nom=$Tableaux->getNom();
        $prix=$Tableaux->getPrix();
        $image=$Tableaux->getImage();
        $informations=$Tableaux->getInformation();
        $req->bindValue(':id_utilisateur',$id_utilisateur);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':image',$image);
        $req->bindValue(':informations',$informations);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerTableaux($id){
    $sql="DELETE FROM Tableaux where id=:id";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
function countTableaux($id){


        $sql="SELECT * from Tableaux where id_utilisateur= $id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        $nombre=$liste->rowCount();
        return $nombre;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    
function countTableauxAdmin(){


    $sql="SELECT * from Tableaux ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    $nombre=$liste->rowCount();
    return $nombre;

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

}
?>