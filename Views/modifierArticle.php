<?php
if ( empty(session_id()) ) session_start();
include "../Controller/ArticleC.php";
include "../Model/Article.php";
if(isset($_GET['id'])) {
    $article1c = new ArticleC();
    $liste=$article1c->recupererArticleById($_GET['id']);
    if (isset($_POST['modifier'])) {

        $article = new Article($_POST['titre'], $_POST['description'], $_SESSION['idclient']);
        $article->setId($_GET['id']);
        $article1c->modifierArticle($article);


    ?>
    <script>
        document.location.replace("MesArticles.php");
    </script>
    <?php
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:26 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog List View || Egypt Museum || Responsive HTML Template</title>
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
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPrata&amp;display=swap"
            rel="stylesheet">


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
                    <div class="col-lg-8">

                        <div class="product-details__review-form">
                            <h3 class="product-details__review-form__title">Modifier un Article</h3>
                            <?php
                            foreach ($liste as $row) {
                                ?>
                                <form action="" method="post" class="contact-one__form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="contact-one__field">
                                                <input type="text" name="titre" placeholder="Titre ..." value="<?php echo $row['titre']; ?>">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="contact-one__field">
                                                <textarea name="description"
                                                          placeholder="Description ..."><?php echo $row['description']; ?></textarea>
                                            </p><!-- /.contact-one__field -->
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="thm-btn contact-one__btn" name="modifier">
                                                Modifier
                                            </button>
                                        </div><!-- /.col-lg-12 -->
                                    </div><!-- /.row -->
                                </form>
                                <?php
                            }
                            ?>
                        </div>

                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar sidebar__right">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="text" name="search" placeholder="Search...">
                                    <button type="submit"><i class="egypt-icon-search"></i></button>
                                </form><!-- /.sidebar__search-form -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                                <ul class="list-unstyled sidebar__cat-list">
                                    <li>
                                        <a href="#">
                                            <span class="sidebar__cat-list__icon"></span>
                                            History
                                            <span class="sidebar__cat-list__count">(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sidebar__cat-list__icon"></span>
                                            Internationl
                                            <span class="sidebar__cat-list__count">(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sidebar__cat-list__icon"></span>
                                            Exhibition
                                            <span class="sidebar__cat-list__count">(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sidebar__cat-list__icon"></span>
                                            Kids & Family
                                            <span class="sidebar__cat-list__count">(10)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sidebar__cat-list__icon"></span>
                                            Press Release
                                            <span class="sidebar__cat-list__count">(10)</span>
                                        </a>
                                    </li>
                                </ul><!-- /.sidebar__cat-list -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h3 class="sidebar__title">Trending Post</h3><!-- /.sidebar__title -->
                                <div class="sidebar__post-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="sidebar__post-single">
                                            <div class="sidebar__post-image">
                                                <div class="sidebar__post-date"><span>5</span> sep</div>
                                                <!-- /.sidebar__post-date -->
                                                <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image"/>
                                            </div><!-- /.sidebar__post-image -->
                                            <div class="sidebar__post-content">
                                                <a href="#" class="sidebar__post-cata">International</a>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things
                                                        You’ll Learn at The Egypt National Symposium</a></h3>
                                                <!-- /.sidebar__post-title -->
                                                <a href="blog-details.html" class="sidebar__post-link">Read More
                                                    <span>+</span></a>
                                            </div><!-- /.sidebar__post-content -->
                                        </div><!-- /.sidebar__post-single -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="sidebar__post-single">
                                            <div class="sidebar__post-image">
                                                <div class="sidebar__post-date"><span>5</span> sep</div>
                                                <!-- /.sidebar__post-date -->
                                                <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image"/>
                                            </div><!-- /.sidebar__post-image -->
                                            <div class="sidebar__post-content">
                                                <a href="#" class="sidebar__post-cata">International</a>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things
                                                        You’ll Learn at The Egypt National Symposium</a></h3>
                                                <!-- /.sidebar__post-title -->
                                                <a href="blog-details.html" class="sidebar__post-link">Read More
                                                    <span>+</span></a>
                                            </div><!-- /.sidebar__post-content -->
                                        </div><!-- /.sidebar__post-single -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="sidebar__post-single">
                                            <div class="sidebar__post-image">
                                                <div class="sidebar__post-date"><span>5</span> sep</div>
                                                <!-- /.sidebar__post-date -->
                                                <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image"/>
                                            </div><!-- /.sidebar__post-image -->
                                            <div class="sidebar__post-content">
                                                <a href="#" class="sidebar__post-cata">International</a>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things
                                                        You’ll Learn at The Egypt National Symposium</a></h3>
                                                <!-- /.sidebar__post-title -->
                                                <a href="blog-details.html" class="sidebar__post-link">Read More
                                                    <span>+</span></a>
                                            </div><!-- /.sidebar__post-content -->
                                        </div><!-- /.sidebar__post-single -->
                                    </div><!-- /.item -->
                                </div><!-- /.sidebar__post-carousel -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                                <div class="sidebar__tags-list">
                                    <a href="#">Art</a>
                                    <a href="#">Collection</a>
                                    <a href="#">Display</a>
                                    <a href="#">Events</a>
                                    <a href="#">Exhibition</a>
                                    <a href="#">Gallery</a>
                                    <a href="#">Memorial</a>
                                    <a href="#">Visit</a>
                                </div><!-- /.sidebar__tags-list -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h3 class="sidebar__title">Instagram</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__insta-list list-unstyled">
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-1.jpg" alt="Awesome Image"/>
                                        </a></li>
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-2.jpg" alt="Awesome Image"/>
                                        </a></li>
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-3.jpg" alt="Awesome Image"/>
                                        </a></li>
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-4.jpg" alt="Awesome Image"/>
                                        </a></li>
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-5.jpg" alt="Awesome Image"/>
                                        </a></li>
                                    <li><a href="#">
                                            <span class="sidebar__insta-list__link">+</span>
                                            <img src="images/blog/blog-insta-1-6.jpg" alt="Awesome Image"/>
                                        </a></li>
                                </ul><!-- /.sidebar__insta-list -->
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
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
    <?php
}
    ?>
