<?php
if ( empty(session_id()) ) session_start();
include "../Controller/EvenementC.php";
$event1C=new EvenementC();
$liste=$event1C->getEvents();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/event-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:31:35 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evenements</title>
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
    <section class="event-page-header">
        <section class="event-sorting event-page-three">
            <div class="container">
                <div class="tab-content">
                    <div id="searchByMonth-tab" class="event-sorting__tab-content tab-pane show active animated fadeInUp">
                        <input type="text" name="searchByMonth-datepicker"  value="Les Evenements" readonly>
                    </div><!-- /.event-sorting__tab-content tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.event-sorting -->

    </section><!-- /.event-page-header -->

    <section class="event-three">
        <div class="container">
                <div class="list-group">
                    <h3>Recherche</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <form>
                          <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Recherche..."  id="rech">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>            
                <div class="row" id="tableau">


                </div><!-- /.container -->
    </section><!-- /.event-three -->
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type = "text/javascript">
        $(document).ready(function(){
            load_data();
            function load_data(str)
            {
                $.ajax({
                    url:"AjaxEvennement.php",
                    method:"post",
                    data:{str:str},
                    success:function(data)
                    {
                        $('#tableau').html(data);
                    }
                });
            }

            $('#rech').keyup(function(){
                var recherche = $(this).val();
                if(recherche != '')
                {
                    load_data(recherche);
                }
                else
                {
                    load_data();
                }
            });
        });
    </script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/event-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:31:47 GMT -->
</html>
