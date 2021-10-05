<?php 
require_once "../config.php";
class LivraisonC{


public function afficherLivraisons(){
    $sql="SELECT * From Livraison";
    $db=config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
}

        function recupererLivraison($id){
        $sql="SELECT * from Livraison where id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->execute();
        $res=$req->fetchAll();
        return $res;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererLivraisonParAchat($idc){
        $sql="SELECT * from Livraison where idc=:idc";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $req->bindValue(':idc',$idc);
        $req->execute();
        $res=$req->fetchAll();
        return $res;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



public function ajouterLivraisons($Livraison){
    $sql="insert into Livraison(idc,nom,prenom,adresse,tel,emplacement,code_post) values(:idc,:nom,:prenom,:adresse,:tel,:emplacement,:code_post)";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $idc=$Livraison->getIdc();
    $nom=$Livraison->getNom();
    $prenom=$Livraison->getPrenom();
    $adresse=$Livraison->getAdresse();
    $tel=$Livraison->getTel();
    $emplacement=$Livraison->getEmplacement();
    $code_post=$Livraison->getCodePost();
    $req->bindValue(':idc',$idc);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':adresse',$adresse);
    $req->bindValue(':tel',$tel);
    $req->bindValue(':emplacement',$emplacement);
    $req->bindValue(':code_post',$code_post);
    $req->execute();
    }
    catch(Exception $e){
        die('Erreur:' .$e->getMessage());
    }
    
}

public function supprimerLivraison($id){
    $sql="DELETE FROM Livraison where idc=:id";
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

    function modifierLivraison($Livraison,$id){
        $sql="UPDATE Livraison SET nom=:nom,prenom=:prenom,adresse=:adresse,tel=:tel,emplacement=:emplacement,code_post=:code_post WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$Livraison->getNom();
        $prenom=$Livraison->getPrenom();
        $adresse=$Livraison->getAdresse();
        $tel=$Livraison->getTel();
        $emplacement=$Livraison->getEmplacement();
        $code_post=$Livraison->getCodePost();
        $datas = array(':id'=>$id, ':nom'=>$nom, ':prenom'=>$prenom, ':tel'=>$tel);
        $req->bindValue(':id',$id);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':tel',$tel);
        $req->bindValue(':emplacement',$emplacement);
        $req->bindValue(':code_post',$code_post);
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
}
?>