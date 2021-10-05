<?php 
require_once "../config.php";
class CadeauxC{

    public function afficher($Cadeaux){
        $id=$Cadeaux->getid();
        $id_utilisateur=$Cadeaux->getid_utilisateur();
        $nom=$Cadeaux->getNom();
        $prix=$Cadeaux->getPrix();

}    
    
    function rechercherTicket($str){
        $sql="select * from Cadeaux where categorie like '%".$str."%' or nom like '%".$str."%'";
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

public function afficherCadeauxs(){
    $sql="SELECT * From Cadeaux";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherMesCadeaux($id){
    $sql="SELECT * From Cadeaux where id_utilisateur=$id";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

public function afficherCadeauxWithID($id){
    $sql="SELECT * From Cadeaux where id=$id";
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
    function UpdateImgCadeauximg($id,$image){
        $sql="UPDATE Cadeaux SET image=:image WHERE id=:id";
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
    function modifierCadeaux($Cadeaux,$id){
        $sql="UPDATE Cadeaux SET nom=:nom,prix=:prix WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->sCadeauxtribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id_utilisateur=$Cadeaux->getId_utilisateur();
        $nom=$Cadeaux->getNom();
        $prix=$Cadeaux->getPrix();
        $datas = array(':id'=>$id,':nom'=>$nom,':prix'=>$prix);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

public function ajouterCadeaux($Cadeaux){
    $sql="insert into Cadeaux(id_utilisateur,nom,prix,image) values(:id_utilisateur,:nom,:prix,:image)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
        $id_utilisateur=$Cadeaux->getId_utilisateur();
        $nom=$Cadeaux->getNom();
        $prix=$Cadeaux->getPrix();
        $image=$Cadeaux->getImage();
        $req->bindValue(':id_utilisateur',$id_utilisateur);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':image',$image);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}
public function supprimerCadeaux($id){
    $sql="DELETE FROM Cadeaux where id=:id";
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

function countCadeaux($id){


    $sql="SELECT * from Cadeaux where id_utilisateur= $id";
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
function countCadeauxAdmin(){


    $sql="SELECT * from Cadeaux ";
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