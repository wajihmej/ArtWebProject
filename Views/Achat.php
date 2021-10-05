<?php
session_start();


include  "../Controller/PanierC.php";
include  "../Model/Panier.php";

include  "../Controller/AchatC.php";
include  "../Model/Achat.php";

include  "../Controller/LivraisonC.php";
include  "../Model/Livraison.php";

$panierC= new PanierC();
$liste=$panierC->afficherPanierWithID();
$resultc=$panierC->countPanier();
$prixtot=$panierC->countPrixTotalPanier();
$sum = 0;
foreach($prixtot as $row){
   $score = $row['prix_total'];
   $sum += (int)$score;
}   

if(isset($_POST['achat']))
{

    if(!isset($_SESSION['client'])){
        echo "<script type='text/javascript'>";
        echo "alert('Veuillez vous connecter !');
        window.location.href='Connexion.php';";
        echo "</script>";
    }
    else
    {
        $achatC= new AchatC();

        foreach($liste as $row){
            $achat=new Achat($_SESSION['idclient'],$row['id_prod'],$row['quatite'],$row['prix_total'],$row['type']);
            $achatC->ajouterAchat($achat);  
            $panierC->supprimerPanier($row["id"]);
            $last=$achatC->lastid(); 

            foreach($last as $row1){
                $livraison = new Livraison($row1['MAX(ID)'],$_POST['nom'],$_POST['prenom'],$_POST['address'],$_POST['tel'],$_POST['emplacement'],$_POST['pincode']);
                $livraisonC= new LivraisonC();
                $livraisonC->ajouterLivraisons($livraison);
            }           

        }
        echo "<script type='text/javascript'>";
        echo "alert('Achat effectué avec succès !');
        window.location.href='Panier.php';";
        echo "</script>";

    }



}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/checkhout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Achat</title>
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
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <div class="container">
            <ul class="list-unstyled thm-breadcrumb thm-breadcrumb__two">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="proudcts.html">Shop</a></li>
                <li>Checkout</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
        <section class="checkout-one">
            <div class="container">
                <form method="POST" class="row checkout-one__main-form" id="form_livraison">
                    <div class="col-lg-6">
                        <div class="checkout-one__form">
                            <h3 class="checkout-one__title">Shipping Address</h3><!-- /.checkout-one__title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nom" placeholder="First Name" id="nom" value="<?php echo $_SESSION['clientnom']; ?>" >
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" name="prenom" placeholder="Last Name" id="prenom" value="<?php echo $_SESSION['clientprenom']; ?>" >
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <input type="text" name="address" placeholder="Address" id="address" value="<?php echo $_SESSION['clientadresse']; ?>" >
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <input type="text" name="tel" placeholder="tel" id="tel" value="<?php echo $_SESSION['clienttel']; ?>" >
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <select class="selectpicker" name="emplacement">
                                    <option value="Ariana">Ariana</option>
                                    <option value="Béja">Béja</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Gabès">Gabès</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Jendouba">Jendouba</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserine">Kasserine</option>
                                    <option value="Kébili">Kébili</option>
                                    <option value="Le Kef">Le Kef</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="La Manouba">La Manouba</option>
                                    <option value="Médenine">Médenine</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Tozeur">Tozeur</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Zaghouan">Zaghouan</option>
                                    </select>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" name="pincode" placeholder="Pincode" id="pincode">
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.checkout-one__form -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="checkout-one__content">
                        <?php
                                    foreach($liste as $row){

                        ?>
                            <div class="checkout-one__content-single">
                                <div class="checkout-one__content-single__left">
                                <?php
                                        $listprod=$panierC->afficherImageProductPaniers($row['type'],$row['id_prod']);
                                        foreach($listprod as $row2){
                                            ?>
                                    <div class="checkout-one__content-image">
                                        <div class="checkout-one__content-image-inner">
                                            <img src="<?php echo $row2['image']; ?>" alt="Awesome Image" width="70" height="70" />
                                        </div><!-- /.checkout-one__content-image-inner -->
                                    </div><!-- /.checkout-one__content-image -->
                                    <h3 class="checkout-one__content-title"> <?php echo $row2['nom']; ?></h3><!-- /.checkout-one__content-title -->
                                </div><!-- /.checkout-one__content-single__left -->
                                <div class="checkout-one__content-single__right">
                                    <p class="checkout-one__content-price"><?php echo $row2['prix']; ?> TND</p><!-- /.checkout-one__content-price -->
                                </div><!-- /.checkout-one__content-single__right -->
                            </div><!-- /.checkout-one__content-single -->
                            <?php
                                        }
                                        ?>
                            <?php
                                            }
                                        ?>           

                            <div class="checkout-one__price">
                                <div class="checkout-one__price-single">
                                    <p class="checkout-one__price-name"><span>Total</span></p><!-- /.checkout-one__price-name -->
                                    <p class="checkout-one__price-amount"><span><?php echo $sum; ?> TND</span></p><!-- /.checkout-one__price-amount -->
                                </div><!-- /.checkout-one__price-single -->
                                <div class="checkout-one__price-single">
                                    <p class="checkout-one__price-name"><span>Livraison</span></p><!-- /.checkout-one__price-name -->
                                    <p class="checkout-one__price-amount"><span>0 TND</span></p><!-- /.checkout-one__price-amount -->
                                </div><!-- /.checkout-one__price-single -->
                            </div><!-- /.checkout-one__price -->

                            <div class="checkout-one__total">
                                <p class="checkout-one__total-name">Total</p><!-- /.checkout-one__total-name -->
                                <p class="checkout-one__total-amount"><?php echo $sum; ?> TND</p><!-- /.checkout-one__total-amount -->
                            </div><!-- /.checkout-one__total -->

                            <input class="thm-btn checkout-one__btn" type="submit" value="Acheter" name="achat" id="achat">
                        </div><!-- /.checkout-one__content -->
                    </div><!-- /.col-lg-6 -->
                </form><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.checkout-one -->
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
    <script src="js/Livraison.js"></script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/checkhout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
</html>