<?php
session_start();

include "../Controller/ArticleC.php";
include "../Controller/CommentaireC.php";
$article1C=new ArticleC();
$liste=$article1C->recupererArticleById($_GET['id']);
$comentaire1C=new CommentaireC();
$listeComments=$comentaire1C->recupererCommenatiresByArticle($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:40 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
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
            <h2 class="inner-banner__title">Article</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Article</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <?php
                foreach ($liste as$item) {
                    ?>
                    <div class="col-lg-8">
                        <div class="blog-four__single">
                            <div class="blog-four__date">
                                <span>
                                    <b><?php echo date("d", strtotime($item['date'])); ?></b>
                                    <?php echo date("F", strtotime($item['date'])); ?>
                                </span>
                            </div><!-- /.blog-four__date -->
                            <div class="blog-four__image">
                                <img src="images/blog/blog-l-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.blog-four__image -->
                            <div class="blog-four__content">
                                <div class="blog-four__meta">
                                    <?php
                                    if($item['id_client']==$_SESSION['idclient']) {
                                        ?>
                                        <a href="blog-details.html">Moi</a>
                                        <?php
                                    }else {
                                        ?>
                                        <a href="blog-details.html"><?php echo $item['nom']." ".$item['prenom']; ?> </a>
                                        <?php
                                    }
                                    ?>
                                    <span class="blog-four__meta-sep">_</span><!-- /.blog-four__meta-sep -->
                                    <a href="blog-details.html"> <?php echo $listeComments->rowCount(); ?> Comments</a>
                                    <span class="blog-four__meta-sep">_</span><!-- /.blog-four__meta-sep -->
                                    <a href="blog-details.html">24 Views</a>
                                </div><!-- /.blog-four__meta -->
                                <h3 class="blog-four__title"><?php echo $item['titre']; ?></h3>
                                <!-- /.blog-four__title -->
                                <p class="blog-four__text"><?php echo $item['description']; ?></p>
                            </div><!-- /.blog-four__content -->

                            <div class="blog-details__comment">
                                <h3 class="blog-details__comment-title">Commentaires</h3>
                                <!-- /.blog-details__comment-title -->
                                <?php
                                foreach ($listeComments as $row) {
                                    ?>
                                    <div class="blog-details__comment-single">
                                        <div class="blog-details__comment-image">
                                            <div class="blog-details__comment-image-inner">
                                                <img src="<?PHP echo $row['image']; ?>" height="100" width="100" alt="Awesome Image"/>
                                            </div><!-- /.blog-details__comment-image-inner -->
                                        </div><!-- /.blog-details__comment-image -->
                                        <div class="blog-details__comment-content">
                                            <div class="blog-details__comment-top">
                                                <h3 class="blog-details__comment-name"><?php echo $row['nom']." ".$row['prenom']; ?></h3>
                                                <span class="blog-details__comment-sep">,</span>
                                                <span class="blog-details__comment-date"><?php echo $row['date']; ?></span>
                                            </div><!-- /.blog-details__comment-top -->
                                            <p class="blog-details__comment-text"><?php echo $row['commentaire']; ?></p>
                                                <?php
                                                if($row['id_client']==$_SESSION['idclient'])
                                                {
                                                ?>
                                            <a href="supprimerCommentaire.php?id=<?php echo $row['id']; ?>&&id_article=<?php echo $row['id_article']; ?>" class="blog-details__comment-link">Supprimer</a>
                                                <?php
                                                }
                                                ?>
                                        </div><!-- /.blog-details__comment-content -->
                                    </div><!-- /.blog-details__comment-single -->
                                    <?php
                                }
                                ?>
                            </div><!-- /.blog-details__comment -->

                            <div class="product-details__review-form">
                                <h3 class="product-details__review-form__title">Ajouter votre Commentaire</h3>
                                <form action="ajoutCommentaire.php" method="post" class="contact-one__form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="contact-one__field">
                                                <textarea name="commentaire" placeholder="Votre Commentaire"></textarea>
                                                <input type="hidden" name="id_article" value="<?php echo $_GET['id']; ?>">
                                            </p><!-- /.contact-one__field -->
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="thm-btn contact-one__btn">Poster un commentaire</button>
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                </form>
                            </div>

                        </div><!-- /.blog-four__single -->
                    </div><!-- /.col-lg-8 -->
                    <?php
                }
                ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:46 GMT -->
</html>
