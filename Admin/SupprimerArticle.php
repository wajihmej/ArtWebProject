<?php
if ( empty(session_id()) ) session_start();
include "../Controller/ArticleC.php";
$article1c=new ArticleC();
$article1c->supprimerArticle($_GET['id']);

?>
<script>
    document.location.replace("AfficherArticles.php") ;
</script>
<?php

?>
