<?php
session_start();

include  "../Controller/CadeauxC.php";

$cadeauxC= new CadeauxC();
    $liste=$cadeauxC->afficherCadeauxs();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/proudcts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher Cadeaux</title>
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

        <section class="inner-banner" style="background-image: url(images/background/inner-banner-bg-1-2.jpg);">
            <div class="container">
                <h2 class="inner-banner__title">Produits</h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Produits</li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <div class="product-sorting">
            <div class="container">
                <div class="inner-container">
                <form method="POST" action="AjouterCadeau.php">
                     <input type="submit" class="thm-btn login-form__btn" value="Ajouter un Cadeaux" name="ajouter" >
                  </form>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </div><!-- /.product-sorting -->
        <section class="product-one">
            <div class="container">
                <div class="row">
                <?php
// connect to database
$con = mysqli_connect('localhost','root','mysql');
mysqli_select_db($con, 'projet_art');

// define how many results you want per page
$results_per_page = 3;

// find out the number of results stored in database
$sql='SELECT * FROM cadeaux';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM cadeaux LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) {
  echo '
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                      <div class="product-one__single">
                            <div class="product-one__image">
                                <img src="'.$row['image'].'"  width="150" height="300" alt="Awesome Image" />
                            </div><!-- /.product-one__image -->
                            <div class="product-one__content">
                                <div class="product-one__content-left">
                                    <h3 class="product-one__title">
                                    <a href="Produit.php?id='.$row['id'].'&type=cadeaux">'.$row['nom'].'</a>
                                    </h3><!-- /.product-one__title -->
                                    <p class="product-one__text">'.$row['prix'].' TND</p><!-- /.product-one__text -->
                                    <p class="product-one__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(24 Reviews)</span>
                                    </p><!-- /.product-one__stars -->
                                </div><!-- /.product-one__content-left -->
                                <div class="product-one__content-right">
                                    <a href="AjouterPanier.php?id='. $row['id'].'&prix='.$row['prix'].'&type=cadeaux" data-toggle="tooltip" data-placement="top" title="Ajouter Panier" class="product-one__cart-btn"><i class="egypt-icon-supermarket"></i></a>
                                </div><!-- /.product-one__content-right -->
                            </div><!-- /.product-one__content -->
                        </div><!-- /.product-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
            ';
}
?>
                </div><!-- /.row -->
                     
                <div class="post-pagination">
						<?php 
						        // display the links to the pages
						for ($page=1;$page<=$number_of_pages;$page++) {
							if($page==$_GET['page'])
						  echo '<a href="AfficherCadeaux.php?page=' . $page . '" class="active" >' . $page . '</a> ';
						else
						  echo '<a href="AfficherCadeaux.php?page=' . $page . '" >' . $page . '</a> ';
						}
						?>                  
                </div><!-- /.post-pagination -->
            </div><!-- /.container -->
        </section><!-- /.product-one -->
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/proudcts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:48 GMT -->
</html>