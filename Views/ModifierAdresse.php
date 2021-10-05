<?php
session_start();


include  "../Controller/LivraisonC.php";
include  "../Model/Livraison.php";

if(!isset($_SESSION['client'])){
    header('Location: Connexion.php');

}

$livraisonC= new LivraisonC();
$liste=$livraisonC->recupererLivraison($_GET["id"]);

foreach($liste as $row){
    $id=$row['id'];
    $idc=$row['idc'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $adresse=$row['adresse'];
    $tel=$row['tel'];
    $emplacement=$row['emplacement'];
    $code_post=$row['code_post'];
        }


if(isset($_POST['Modidifer']))
{



                $livraison = new Livraison($idc,$_POST['nom'],$_POST['prenom'],$_POST['address'],$_POST['tel'],$_POST['emplacement'],$_POST['pincode']);
                $livraisonC->modifierLivraison($livraison,$id);
                    
        header("Location: AdresseAchat.php?id=".$idc);
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
                    <div class="col-lg-12">
                        <div class="checkout-one__form">
                            <h3 class="checkout-one__title">Modifier Address</h3><!-- /.checkout-one__title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nom" placeholder="First Name" id="nom" value="<?php echo $nom; ?>" >
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" name="prenom" placeholder="Last Name" id="prenom" value="<?php echo $prenom; ?>" >
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <input type="text" name="address" placeholder="Address" id="address" value="<?php echo $adresse; ?>" >
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <input type="text" name="tel" placeholder="tel" id="tel" value="<?php echo $tel; ?>" >
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-6">
                                    <select class="selectpicker" name="emplacement">
                                    <option value="<?php echo $emplacement; ?>" ></option>
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
                                    <input type="text" name="pincode" placeholder="Pincode" id="pincode" value="<?php echo $code_post; ?>" >
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.checkout-one__form -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                            <input class="thm-btn checkout-one__btn" type="submit" value="Modidifer" name="Modidifer" id="Modidifer">
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