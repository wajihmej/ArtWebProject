<?php
if ( empty(session_id()) ) session_start();

include "../Controller/ArticleC.php";
$article1C=new ArticleC();
$liste=$article1C->recupererArticleByClientId($_SESSION['idclient']);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes Articles</title>
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
            <h2 class="inner-banner__title">Mes Articles</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Blog</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php
                    foreach ($liste as $item) {
                        ?>
                        <div class="blog-one__single">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-one__image">
                                        <img src="images/blog/blog-g-1-1.jpg" alt="">
                                        <a href="article.php?id=<?php echo $item['id']; ?>"><i class="egypt-icon-add"></i>
                                            <!-- /.egypt-icon-add --></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="blog-one__content">
                                        <div class="blog-one__top">
                                            <div class="blog-one__date">
                                                <span>
                                                    <?php echo date("d", strtotime($item['date'])); ?> <br>
                                                    <?php echo date("F", strtotime($item['date'])); ?>
                                                </span>
                                            </div><!-- /.blog-one__date -->
                                            <div class="blog-one__meta">
                                                <a href="#">Moi</a>
                                                <a href="#"></a>
                                            </div><!-- /.blog-one__meta -->
                                        </div><!-- /.blog-one__top -->
                                        <h3 class="blog-one__title"><a href="article.php?id=<?php echo $item['id']; ?>"><?php echo $item['titre']; ?></a></h3><!-- /.blog-one__title -->
                                        <p class="blog-one__text"><?php echo $item['description']; ?></p><!-- /.blog-one__text -->
                                        <a href="article.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Voir plus <span>+</span></a><br>
                                        <a href="supprimerArticle.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Supprimer</a><br>
                                        <a href="modifierArticle.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Modifier</a>
                                        <!-- /.blog-one__link -->
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-one__single -->
                        <?php
                    }
                    ?>

                    <a href="ajouterArticle.php">Poster un atricle</a>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-grid -->
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:32 GMT -->
</html>
