<?php
include "../Controller/PromotionC.php";
include "../Model/Promotion.php";
$promotion1C=new PromotionC();
if(isset($_POST['ajouter'])){
$promo =new Promotion($_POST['date_promotion'],$_POST['reduction'],$_POST['id_event']);
$promotion1C->addPromotion($promo);
    ?>
    <script>
        document.location.replace("VoirEvenement.php?id=<?php echo $_POST['id_event']; ?>") ;
    </script>
    <?php
}


?>
