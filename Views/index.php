<?php
if ( empty(session_id()) ) session_start();
include "../Controller/EvenementC.php";

include  "../Controller/TableauxC.php";
include  "../Controller/CadeauxC.php";
include "../Controller/CommentaireC.php";

$commentaireC=new CommentaireC();
$cadeauxC= new CadeauxC();
$tableauxC= new TableauxC();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:28:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abripeintre</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/logo2.png">
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
       
        <section class="slider-one">
            <div class="slider-one__carousel owl-carousel owl-theme">
                <div class="item slider-one__slider-1" style="background-image: url(images/slider/slider-1-1.jpg);">
                    <div class="container text-center">
                        <p class="slider-one__tag-line text-uppercase">Achetez des tableaux!</p><!-- /.slider-one__tag-line -->
                        <h2 class="slider-one__title">La premiere galerie de tableaux en ligne en Tunisie.</h2><!-- /.slider-one__title -->
                        <!-- /.slider-one__text -->
                        <a href="AfficherTableaux.php" class="thm-btn slider-one__btn">Decouvrez les tableaux.</a><!-- /.thm-btn slider-one__btn -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
                <div class="item slider-one__slider-2" style="background-image: url(images/slider/slider-1-2.jpg);">
                    <div class="container text-center">
                        <p class="slider-one__tag-line text-uppercase">Decouvrez les evenements!</p>
                        <!-- /.slider-one__tag-line -->
                        <h2 class="slider-one__title">Ne ratez aucun evenement et ses promotions!</h2><!-- /.slider-one__title -->
                        <!-- /.slider-one__text -->
                        <a href="Evenements.php" class="thm-btn slider-one__btn">Voir les evenements.</a><!-- /.thm-btn slider-one__btn -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
                <div class="item slider-one__slider-3" style="background-image: url(images/slider/slider-1-3.jpg);">
                    <div class="container text-center">
                        <p class="slider-one__tag-line text-uppercase">Offrez un cadeau!</p><!-- /.slider-one__tag-line -->
                        <h2 class="slider-one__title">Decouvrez notre large choix de cadeaux!<br></h2><!-- /.slider-one__title -->
                        <!-- /.slider-one__text -->
                        <a href="AfficherCadeaux.php" class="thm-btn slider-one__btn">Voir les cadeaux.</a><!-- /.thm-btn slider-one__btn -->
                    </div><!-- /.container -->
                </div><!-- /.item -->
            </div><!-- /.slider-one__carousel -->
            <div class="slider-one__nav">
                <a class="slider-one__nav-left slide-one__left-btn" href="#">
                    <i class="egypt-icon-right-angle"></i>
                    <span class="slider-one__nav-text">Prev</span><!-- /.slider-one__nav-text -->
                </a>
                <a class="slider-one__nav-right slide-one__right-btn" href="#">
                    <i class="egypt-icon-left-angle"></i>
                    <span class="slider-one__nav-text">Next</span><!-- /.slider-one__nav-text -->
                </a>
            </div><!-- /.slider-two__nav -->
        </section><!-- /.slider-one -->



        <section class="event-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-flex">
                        <div class="my-auto">
                            <div class="event-two__block">
                                <div class="block-title text-left">
                                    <p class="block-title__tag-line">Evènements</p><!-- /.block-title__tag-line -->
                                    <h2 class="block-title__title"> Evènements</h2><!-- /.block-title__title -->
                                </div><!-- /.block-title -->
                               
                                <a href="Evenements.php" class="event-two__more-link">Découvrez tout les évènements<span>+</span></a>
                            </div><!-- /.event-two__block -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="tab-content">
                            <div class="event-two__main tab-pane animated fadeInRight show active" id="current" role="tabpanel">
                                <?php
                                    $event1C=new EvenementC();
                                    $listeEvent=$event1C->getEvents();
                                    foreach ($listeEvent as $row)
                                        {   
                                ?>
                                <div class="event-two__single">
                                    <div class="event-two__image">
                                        <div class="event-two__time">
                                            <i class="fa fa-clock-o"></i>
                                            <?php echo $row['date_debut']; ?>
                                        </div><!-- /.event-two__time -->
                                        <div class="event-two__image-inner">
                                            <div class="event-two__price"><span>Free</span></div><!-- /.event-two__price -->
                                            <img src="../Admin/<?php echo $row['image'] ?>" width="200" height="200" alt="Awesome Image" />
                                        </div><!-- /.event-two__image-inner -->
                                    </div><!-- /.event-two__image -->
                                    <div class="event-two__content">
                                        <div class="event-two__content-top">
                                            <div class="event-two__date">
                                                <div class="event-two__date-num">
                                                <?php echo $row['date_debut']; ?>
                                                </div><!-- /.event-two__date-num -->
                                                <div class="event-two__date-text">
                                                    <span>Jusqu'a</span>
                                                    <?php echo $row['date_fin']; ?>
                                                </div><!-- /.event-two__date-text -->
                                            </div><!-- /.event-two__date -->
                                        </div><!-- /.event-two__content-top -->
                                        <h3 class="event-two__title">
                                            <a href="VoirEvenement.php?id=<?php echo $row['id']; ?>"><?php echo $row['informations']; ?></a>
                                        </h3>
                                        <p class="event-two__text"><?php echo $row['lieu']; ?></p>
                                        <a href="VoirEvenement.php?id=<?php echo $row['id']; ?>" class="event-two__link"><span><i class="fa fa-angle-right"></i>More Details</span></a>
                                    </div><!-- /.event-two__content -->
                                </div><!-- /.event-two__single -->
                                <?php
                                    }
                                ?>                            
                            </div><!-- /.event-two__main -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.event-two -->
        <section class="collection-three">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Nos tableaux</p><!-- /.block-title__tag-line -->
                    <h2 class="block-title__title">Découvrez nos tableaux</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row masonary-layout">
                    <?php 
                        $listetab=$tableauxC->afficherTableauxs();
                        foreach($listetab as $row1){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonary-item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="collection-three__single">
                            <img src="<?php echo $row1['image'] ?>" alt="Awesome Image" />
                            <div class="collection-three__content">
                                <h3 class="collection-three__title"><a href="Produit.php?id=<?php echo $row1['id']?>&type=tableaux"><?php echo $row1['nom'] ?> <br><?php
                                            $resultaa = $tableauxC->affichernomprenom($row1["id_utilisateur"]);
                                            foreach($resultaa as $row2){  echo $row2['nom'].' '. $row2['prenom']; 
                                            }
                                            ?></a></h3>
                            </div><!-- /.collection-three__content -->
                        </div><!-- /.collection-three__single -->
                    </div><!-- /.col-lg-4 masonary-item -->
                    <?php
                        }
                    ?>                
                </div><!-- /.row -->
                <div class="text-center">
                    <a href="AfficherTableaux.php" class="collection-three__more-link"><span><i class="fa fa-angle-right"></i>View All Collections</span></a>
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section>
        <section class="collection-three">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Nos cabdeaux</p><!-- /.block-title__tag-line -->
                    <h2 class="block-title__title">Découvrez nos cabdeaux</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row masonary-layout">
                    <?php 
                        $listecadeaux=$cadeauxC->afficherCadeauxs();
                        foreach($listecadeaux as $row3){                    
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonary-item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="collection-three__single">
                            <img src="<?php echo $row3['image'] ?>" alt="Awesome Image" />
                            <div class="collection-three__content">
                                <h3 class="collection-three__title"><a href="Produit.php?id=<?php echo $row3['id']?>&type=cadeaux"><?php echo $row3['nom'] ?> <br><?php
                                            $resultaa = $tableauxC->affichernomprenom($row3["id_utilisateur"]);
                                            foreach($resultaa as $row5){  echo $row5['nom'].' '. $row5['prenom']; 
                                            }
                                            ?></a></h3>
                            </div><!-- /.collection-three__content -->
                        </div><!-- /.collection-three__single -->
                    </div><!-- /.col-lg-4 masonary-item -->
                    <?php
                        }
                    ?>                    
                </div><!-- /.row -->
                <div class="text-center">
                    <a href="AfficherTableaux.php" class="collection-three__more-link"><span><i class="fa fa-angle-right"></i>View All Collections</span></a>
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section>
        <section class="testimonials-one">
            <div class="container">
                <div class="testimonials-one__carousel owl-carousel  owl-theme" data-carousel-margin="0">
                    <?php
                    $listecom=$commentaireC->afficherCommentaireIndex();

                        foreach($listecom as $item){                    
                    ?>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__image">
                                <img src="<?php echo $item['image'] ?>" height="100" width="100" alt="">
                            </div><!-- /.testimonials-one__image -->
                            <div class="testimonials-one__info">
                                <h3 class="testimonials-one__name"><?php echo $item['nom'].' '.$item['prenom'] ?></h3><!-- /.testimonials-one__name -->
                                <p class="testimonials-one__designation"><?php echo $item['titre']; ?></p><!-- /.testimonials-one__designation -->
                            </div><!-- /.testimonials-one__info -->
                            <p class="testimonials-one__text"><?php echo $item['commentaire']; ?><br>
                            </p><!-- /.testimonials-one__text -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <?php
                        }
                    ?>
                </div><!-- /.testimonials-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:29:48 GMT -->
</html>