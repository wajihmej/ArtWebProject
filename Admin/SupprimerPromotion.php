<?php
if(isset($_GET['id']) and isset($_GET['id_event'])){
    include "../Controller/PromotionC.php";
    $promo1C=new PromotionC();
    $promo1C->deletePromotion($_GET['id']);
    ?>
    <script>
        document.location.replace("VoirEvenement.php?id=<?php echo $_GET['id_event']; ?>") ;
    </script>
    <?php
}
?>
