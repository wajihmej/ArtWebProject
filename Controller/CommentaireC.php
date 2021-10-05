<?PHP
include_once "../config.php";

class CommentaireC {
    function ajouterCommentaire($commentaire){
        $sql="INSERT INTO commentaire (commentaire,date,id_client,id_article) VALUES (:commentaire,NOW(),:id_client,:id_article)";

        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $req->bindValue(':commentaire',$commentaire->getCommentaire());
            $req->bindValue(':id_client',$commentaire->getIdClient());
            $req->bindValue(':id_article',$commentaire->getIdArticle());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    

    function afficherCommentaireIndex(){
        $sql="SELECT commentaire.*,nom,prenom,image,article.titre FROM commentaire inner join client on commentaire.id_client=client.id inner join article on commentaire.id_article=article.id ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommentaire(){
        $sql="SELECT commentaire.*,nom,prenom FROM commentaire inner join client on commentaire.id_client=client.id inner join article on commentaire.id_article=article.id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerCommentaire($id){
        $sql="DELETE FROM commentaire where id= :id";
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

    function supprimerCommentaireClient($id){
        $sql="DELETE FROM commentaire where id_client= :id";
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

    function recupererCommenatiresByArticle($id_article){
        $sql="SELECT commentaire.*,nom,prenom,image FROM commentaire inner join client on commentaire.id_client=client.id where id_article='$id_article'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierCommentaire($commentaire){
        $sql="UPDATE commentaire SET commentaire=:commentaire WHERE id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':commentaire',$commentaire->getCommentaire());
            $req->bindValue(':id',$commentaire->getId());
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }



}

?>


