<?php
if ( empty(session_id()) ) session_start();
include "../Controller/CommentaireC.php";
include "../Model/Commentaire.php";
$commentaire1C=new CommentaireC();
$commentaire=new Commentaire($_POST['commentaire'],$_SESSION['idclient'],$_POST['id_article']);
$commentaire1C->ajouterCommentaire($commentaire);

?>
<script>
    document.location.replace("article.php?id=<?php echo $_POST['id_article']; ?>") ;
</script>
<?php

?>
