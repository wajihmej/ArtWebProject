<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";


if($_POST['inscri'])
{
if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['tel']) and isset($_POST['adresse'])){
$client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'],$_POST['adresse'],$_POST['sexe'],$_POST['dateannif']);

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/client/".$filename ;
    move_uploaded_file($tempname, $folder);

//Partie3
$clientC = new ClientC();
$clientC->ajouterclients($client);
$clientC->ajouterClientimg($_POST['email'],$folder);

echo "<script type='text/javascript'>";
echo "alert('Vous êtes inscrit ! Connectez-vous !');
window.location.href='Connexion.php';";
echo "</script>";
    
}else{
    echo "vérifieer les champs";
    die();
}
//*/
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
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
                <li>My Account</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
        <section class="login-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="login-form__title">Register</h3><!-- /.login-form__title -->
                        <form action="#" class="login-form__form" method="post" enctype="multipart/form-data" id="form_client">
                            <div class="login-form__field">
                                <input type="text" name="nom" placeholder="Nom" id="nom">
                                <i class="fa fa-user"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input type="text" name="prenom" placeholder="Prenom" id="prenom">
                                <i class="fa fa-user"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input type="text" name="email" placeholder="Email" id="email">
                                <i class="fa fa-envelope-o"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input type="password" name="mdp" placeholder="Mot de passe" id="mdp">
                                <i class="fa fa-lock"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input type="text" name="tel" placeholder="Telephone" id="tel">
                                <i class="fa fa-user"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input type="text" name="adresse" placeholder="Adresse" id="adresse">
                                <i class="fa fa-user"></i>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <input  type="date" name="dateannif" id="dateannif">
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                            <p>Sexe</p>
                              <select class="selectpicker" name="sexe">
                                <option value="">Selectionner un type</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                              </select>
                            </div><!-- /.login-form__field -->
                            <div class="login-form__field">
                                <p>Select image to upload:</p>
                                <input class="form-control" input type="file" name="image" >
                            </div><!-- /.login-form__field -->
                            <div class="login-form__bottom">
                                <input class="thm-btn login-form__btn login-form__btn-two" type="submit" value="S'inscrire" name="inscri" id="inscri">
                                <div class="login-form__social">
                                </div><!-- /.login-form__social -->
                            </div><!-- /.login-form__bottom -->
                        </form><!-- /.login-form__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.login-form -->
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
    <script src="js/Client.js"></script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:52 GMT -->
</html>