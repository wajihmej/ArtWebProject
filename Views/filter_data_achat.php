<?php

include  "../Controller/AchatC.php";

$achatc= new AchatC();
session_start();
$test = $_POST['str'] ;

if($test == 'false'){
    $liste=$achatc->afficherAchatWithID($_SESSION['idclient']);
}
else
{
    $liste = $achatc->triachat($_SESSION['idclient']);
}
                                    foreach($liste as $row){
                                      ?>
                                <tr>
                                    <td class="prod-column">
                                        <div class="column-box">
                                        <?php
                                        $listprod=$achatc->afficherImageProductAchats($row['type'],$row['id_prod']);
                                        foreach($listprod as $row2){
                                            ?>
                                            <figure class="prod-thumb"><a href="#"><img src="<?php echo $row2['image']; ?>" alt="" style="width:50%"></a></figure>
                                            <h3 class="prod-title padd-top-20"> <?php echo $row2['nom']; ?> </h3>
                                        </div>
                                    </td>
                                    <td class="price"><?php echo $row2['prix']; ?> TND</td>
                                            <?php
                                        }
                                        ?>
                                    <td class="qty"><?php echo $row['quatite']; ?></td>
                                    <td class="sub-total"><?php echo $row['prix_total']; ?> TND</td>
                                    <td>
                                                <form method="POST" action="AdresseAchat.php?id=<?PHP echo $row['id']; ?>">
                                                    <input type="submit" class="btn btn-success" value= "Adresse">
                                                </form>
                                    </td>
                                    <td class="remove"><a href="supprimerAchat.php?id=<?PHP echo $row['id']; ?>" class="remove-btn"><span class="egypt-icon-remove"></span> </a></td>
                                </tr>
                                <?php
                                            }
?>