<?php

include  "../Controller/PanierC.php";

$panierC= new PanierC();
$prixtot=$panierC->countPrixTotalPanier();
$sum = 0;
foreach($prixtot as $row){
   $score = $row['prix_total'];
   $sum += (int)$score;
}   


if(!isset($_POST['quantity'])){
    $liste=$panierC->afficherPanierWithID();
}
else{
    $panierC->afficherPanierWithNew($_POST['quantity'],$_POST['id'],$_POST['prix']);
    $liste = $panierC->afficherPanierWithID();
}
?>
                                <tr>
                            <?php
                                    foreach($liste as $row){
                                      ?>
                                    <input type="hidden" id="minPrice" value="<?php echo $row['id']; ?> " />
                                     <?php
                                        $listprod=$panierC->afficherImageProductPaniers($row['type'],$row['id_prod']);
                                        foreach($listprod as $row2){
                                            ?>                                    
                                    <td class="prod-column">
                                        <div class="column-box">
                                            <figure class="prod-thumb"><a href="#"><img src="<?php echo $row2['image']; ?>" alt="" style="width:50%"></a></figure>
                                            <h3 class="prod-title padd-top-20"> <?php echo $row2['nom']; ?> </h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                            <span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" type="button" id="sub">-</button></span>
                                            <input class="quantity-spinner form-control" type="text" value="<?php echo $row['quatite']; ?>" name="quantity" id="quantity">
                                            <span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" type="button" id="add">+</button></span>
                                        </div>
                                    </td>
                                    <td class="price" id="prix"><?php echo $row2['prix']; ?> TND</td>
                                                                                <?php
                                        }
                                        ?>
                                    <td class="sub-total"><?php echo $row['prix_total']; ?> TND</td>
                                    <td class="remove"><a href="supprimerPanier.php?id=<?PHP echo $row['id']; ?>" class="remove-btn"><span class="egypt-icon-remove"></span> </a></td>
                                </tr>
                                <?php
                                            }


?>
