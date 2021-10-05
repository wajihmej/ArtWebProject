<?PHP
include ("../config.php");

class ArticleC {
    function ajouterArticle($article){
        $sql="INSERT INTO article (titre,description,date,id_client) VALUES (:titre,:description,NOW(),:id_client)";

        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$article->getTitre());
            $req->bindValue(':description',$article->getDescription());
            $req->bindValue(':id_client',$article->getIdClient());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherArticle(){
        $sql="SELECT article.*,nom,prenom FROM article inner join client on article.id_client=client.id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherArticleS(){
        $sql="SELECT article.*,client.nom,client.prenom FROM `article`,client WHERE client.id=article.id_client";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerArticle($id){
        $sql="DELETE FROM article where id= :id";
        $db = config::getConnexion();


        try{
            $liste=$db->query("SELECT * FROM commentaire where id_article='$id'");
            foreach ($liste as $row){
                $req1=$db->prepare("DELETE FROM commentaire where id=:id");
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

    function recupererArticleById($id){
        $sql="SELECT article.*,nom,prenom FROM article inner join client on article.id_client=client.id where article.id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererArticleByClientId($id_client){
        $sql="SELECT article.*,nom,prenom FROM article inner join client on article.id_client=client.id where id_client='$id_client'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierArticle($article){
        $sql="UPDATE article SET titre=:titre , description=:description  WHERE id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$article->getTitre());
            $req->bindValue(':description',$article->getDescription());
            $req->bindValue(':id',$article->getId());
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }



}

?>


