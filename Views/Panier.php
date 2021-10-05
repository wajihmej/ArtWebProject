<?php
session_start();


include  "../Controller/PanierC.php";
include  "../Model/Panier.php";

$panierC= new PanierC();
$prixtot=$panierC->countPrixTotalPanier();
$sum = 0;
foreach($prixtot as $row){
   $score = $row['prix_total'];
   $sum += (int)$score;
}   
    $liste=$panierC->afficherPanierWithID();


if(isset($_POST['achat']))
{
	header('Location: Achat.php');

}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#d99578">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#d99578">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#d99578">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPrata&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/egypt-icons/style.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/nouislider.pips.css">
    <link rel="stylesheet" href="css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <div class="container">
            <ul class="list-unstyled thm-breadcrumb thm-breadcrumb__two">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="proudcts.html">Shop</a></li>
                <li>Shopping Cart</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
        <section class="cart-page">
            <div class="container">
                <div class="cart-total">
                    <h3 class="cart-total__text text-uppercase">Panier: <span class="text-capitalize"> <?php echo $resultcount; ?> Items</span></h3><!-- /.cart-total__text -->
                    <h3 class="cart-total__text text-uppercase">Prix Total: <span class="text-capitalize cart-total__highlight"> <?php echo $sum; ?> </span></h3><!-- /.cart-total__text -->
                </div><!-- /.cart-total -->
                <div class="cart-main">
                    <div class="table-outer table-responsive">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th class="prod-column">Product</th>
                                    <th class="price">Prix</th>
                                    <th>Quantite</th>
                                    <th>Total</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody id="tableau">
                            <?php
                                    foreach($liste as $row){
                                      ?>
                                <tr>
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
                                    <td class="price" id="prix_total"><?php echo $row2['prix']; ?> TND</td>
                                                                                <?php
                                        }
                                        ?>
                                    <td class="qty"><?php echo $row['quatite']; ?></td>
                                    <td class="sub-total"><?php echo $row['prix_total']; ?> TND</td>
                                    <td class="remove"><a href="supprimerPanier.php?id=<?PHP echo $row['id']; ?>" class="remove-btn"><span class="egypt-icon-remove"></span> </a></td>
                                </tr>
                                <?php
                                            }
                                        ?>           

                            </tbody>
                        </table>
                    </div>
                </div><!-- /.cart-main -->
                <div class="cart-update">
                    <div class="row justify-content-between">
                        <div class="col-lg-12">
                            <div class="cart-update__button-box">
                                <form method="POST" class="cart-update__button-box">
                                <input class="thm-btn cart-update__btn cart-update__btn-three" type="submit" value="Acheter" name="achat" id="achat">
                                </form><!-- /.cart-update__form -->
                            </div><!-- /.cart-update__button-box -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div><!-- /.cart-update -->
            </div><!-- /.container -->
        </section><!-- /.cart-page -->
        <?php include 'footer.php'; ?>

    </div><!-- /.page-wrapper -->
    <?php include 'menuside.php'; ?>

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="egypt-icon-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="egypt-icon-arrow-2"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/nouislider.js"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/theme.js"></script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
</html>


