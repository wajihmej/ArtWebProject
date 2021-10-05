
<?php

session_start();

if(!isset($_SESSION['idclient']))
{

    header("location: Connexion.php");
}

include "../Model/Client.php";
include "../Controller/ClientC.php";


$clientC = new ClientC();
$result=$clientC->recupererClient($_SESSION['idclient']);
foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $mdp=$row['mdp'];
    $tel=$row['tel'];
    $adresse=$row['adresse'];
    $sexe=$row['sexe'];
    $date_naiss=$row['date_nais'];
    $image=$row['image'];
    }


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/memebership.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Profil</title>
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

        <section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title">Mon Profil</h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Mon Profil</li>
                </ul><!-- /.thm-breadcrumb -->

            </div><!-- /.container -->
        </section><!-- /.inner-banner -->


        <section class="cta-one cta-one__membership-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="cta-one__block">
                            <div class="cta-one__icon">
                                <i class="egypt-icon-membership"></i><!-- /.egypt-icon-membership -->
                            </div><!-- /.cta-one__icon -->
                            <div class="cta-one__content">
                                <h3 class="cta-one__title"><?php echo $nom." ".$prenom;?></h3><!-- /.cta-one__title -->
                                <p class="cta-one__text">Email : <?php echo $email ;?></p><!-- /.cta-one__text -->
                                <ul class="list-unstyled cta-one__list">
                                    <li>
                                        <i class="egypt-icon-check"></i><!-- /.egypt-icon-check -->
                                        Tel : <?php echo $tel ;?>
                                    </li>
                                    <li>
                                        <i class="egypt-icon-check"></i><!-- /.egypt-icon-check -->
                                        Adresse : <?php echo $adresse ;?>
                                    </li>
                                    <li>
                                        <i class="egypt-icon-check"></i><!-- /.egypt-icon-check -->
                                        Sexe : <?php echo $sexe ;?>
                                    </li>
                                    <li>
                                        <i class="egypt-icon-check"></i><!-- /.egypt-icon-check -->
                                        Date de naissance :  <?php echo $date_naiss ;?>
                                    </li>
                                </ul><!-- /.list-unstyled cta-one__list -->
                                <a href="ModifierProfil.php?id=<?PHP echo $id; ?>" class="cta-one__link">
                                    <i class="fa fa-angle-right"></i><!-- /.fa fa-angle-left -->
                                    Modifier Mes données
                                </a><!-- /.cta-one__link -->
                            </div><!-- /.cta-one__content -->
                        </div><!-- /.cta-one__block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 col-lg-12">
                        <img src="<?php echo $image; ?>" alt="" class="img-fluid" />
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/memebership.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:53 GMT -->
</html>