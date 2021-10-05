<?php
if ( empty(session_id()) ) session_start();
if(isset($_GET['id'])){
    include "../Controller/CommentaireC.php";
    $commentaire1C=new CommentaireC();
    $commentaire1C->supprimerCommentaire($_GET['id']);
}
?>
<script>
    document.location.replace("AfficherCommentaires.php?id=<?php echo $_GET['id_article']; ?>") ;
</script>

