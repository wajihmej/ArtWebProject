<?php

session_start();

include  "../Controller/CadeauxC.php";
include "../Model/Tableaux.php";
include "../Controller/TableauxC.php";




if($_GET['type']=="tableaux")
{
$tableauxC = new TableauxC();
    $result=$tableauxC->afficherTableauxWithID($_GET['id']);

    foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prix=$row['prix'];
    $informations=$row['informations'];
    $image=$row['image'];
        }

if(isset($_POST['achat']))
{
    echo $_POST['quantity'] ;
    header("location: AjouterPanier.php?id=". $row['id']."&prix=".$row['prix']."&type=tableaux&qty=".$_POST['quantity'] );

}
}
else
{
    $cadeauxC = new CadeauxC();
    $result=$cadeauxC->afficherCadeauxWithID($_GET['id']);

    foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prix=$row['prix'];
    $image=$row['image'];
        }

if(isset($_POST['achat']))
{
    echo $_POST['quantity'] ;
    header("location: AjouterPanier.php?id=". $row['id']."&prix=".$row['prix']."&type=cadeaux&qty=".$_POST['quantity'] );

}
}

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:49 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produit</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Produit</a></li>
                <li>Produit</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details__image">
                            <img class="img-fluid" src="<?php echo $image; ?>" alt="Awesome Image" />
                            <a href="<?php echo $image; ?>" class="product-details__img-popup img-popup"><i class="fa fa-search"></i></a>
                        </div><!-- /.product-details__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="product-details__content">
                            <h3 class="product-details__title"><?php echo $nom; ?></h3><!-- /.product-details__title -->
                            <p class="product-details__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>(24 Reviews)</span>
                            </p><!-- /.product-details__stars -->
                            <p class="product-details__price"><?php echo $prix; ?> TND </p><!-- /.product-details__price -->
                            <p class="product-details__text"><?php echo $description ;?> </p><!-- /.product-details__text -->
                            <p class="product-details__categories">
                                <span class="text-uppercase">Categories:</span>
                                <a href="#"><?php echo $_GET['type']; ?></a>
                            </p><!-- /.product-details__categories -->
                            <form method="POST">
                            <div class="product-details__button-block">
                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                                <input class="thm-btn checkout-one__btn" type="submit" value="Ajouter au panier" name="achat" id="achat">
                            </div><!-- /.product-details__button-block -->
                            </form>
                            <p class="product-details__availabelity">
                                <span>Availability:</span>
                                In stock
                            </p><!-- /.product-details__availabelity -->
                            <?php 
                            if($_GET['type']=="tableaux")
                            {
                            ?>
                            <div class="accrodion-grp" data-grp-name="product-details__accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p> <?php echo $informations ?></p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div><!-- /.product-details__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.product-details -->
        <section class="related-product">
            <div class="container">
                <h3 class="related-product__title">Produits similaires</h3><!-- /.related-product__title -->
                <div class="related-product__carousel owl-carousel owl-theme">
                    <?php 
                    if($_GET['type']=="tableaux")
                    {
                        $liste=$tableauxC->afficherTableauxs();
                    }
                    else
                    {
                        $liste=$cadeauxC->afficherCadeauxs();
                    }
                    foreach($liste as $row1)
                    {
                    ?>

                    <div class="item">
                        <div class="product-one__single">
                            <div class="product-one__image">
                                <img src="<?php echo $row1['image'] ?>" alt="Awesome Image" />
                            </div><!-- /.product-one__image -->
                            <div class="product-one__content">
                                <div class="product-one__content-left">
                                    <h3 class="product-one__title">
                                        <a href="Produit.php?id=<?php echo $row1['id'] ?>&type=<?php echo $_GET['type'] ?>"><?php echo $row1['nom'] ?></a>
                                    </h3><!-- /.product-one__title -->
                                    <p class="product-one__text"><?php $row['prix'] ?> TND</p><!-- /.product-one__text -->
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
                                <a href="AjouterPanier.php?id=<?php echo $row1['id']?>&prix=<?php echo $row1['prix']?>&type=<?php echo $_GET['type']?>" data-toggle="tooltip" data-placement="top" title="Ajouter Panier" class="product-one__cart-btn"><i class="egypt-icon-supermarket"></i></a>

                                </div><!-- /.product-one__content-right -->
                            </div><!-- /.product-one__content -->
                        </div><!-- /.product-one__single -->
                    </div><!-- /.item -->
                        <?php
                        }
                        ?>
                </div><!-- /.related-product__carousel owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.related-product -->
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:51 GMT -->
</html>