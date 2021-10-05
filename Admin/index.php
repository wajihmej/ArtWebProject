<?php
session_start();
if($_SESSION['login']=="")
{

    header("location: LoginAdmin.php");
}

include  "../Controller/AchatC.php";
include  "../Model/Achat.php";
include  "../Controller/CadeauxC.php";
include  "../Controller/TableauxC.php";

$tableauxC= new TableauxC();
$cadeauxC= new CadeauxC();
$achatC= new AchatC();
$nbtab=$tableauxC->countTableauxAdmin();
$nbcad=$cadeauxC->countCadeauxAdmin();
$resultc=$achatC->countAchatAdmin();
$prixtot=$achatC->countPrixTotalAchatAdmin();
$sum = 0;
foreach($prixtot as $row){
   $score = $row['prix_total'];
   $sum += (int)$score;
}   


$nbprod=$nbtab + $nbcad;
if($resultc>$nbprod)
{
    $pourcentageachat=100;
}
else
{
    $pourcentageachat=100 - round(($nbprod - $resultc) * 100 / $nbprod) ;
}
$pourcentagetab= 100 - round(($nbprod - $nbtab) * 100 / $nbprod) ;
$pourcentagecad= 100 - round(($nbprod - $nbcad) * 100 / $nbprod ) ;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Dashboard</title>
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="dist/css/pages/ecommerce.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
               <?php include'Topbar.php'  ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
                   <?php include'Sidebar.php'  ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nombre de commandes</h4>
                                <div class="text-right"> <span class="text-muted">Achat</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-success"></i></sup><?php echo $resultc ?></h1>
                                </div>
                                <span class="text-success"><?php echo $pourcentageachat?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $pourcentageachat?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Prix total</h4>
                                <div class="text-right"> <span class="text-muted">Prix</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-primary"></i></sup> <?php echo $sum ?> TND</h1>
                                </div>
                                <span class="text-primary">100%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nombre de Cadeaux</h4>
                                <div class="text-right"> <span class="text-muted">Cadeaux </span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-info"></i></sup> <?php echo $nbcad ?></h1>
                                </div>
                                <span class="text-info"><?php echo $pourcentagecad ?>   %</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $pourcentagecad ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nombre de Tableaux</h4>
                                <div class="text-right"> <span class="text-muted">Tableaux</span>
                                    <h1 class="font-light"><sup><i class="ti-arrow-up text-inverse"></i></sup> <?php echo $nbtab ?></h1>
                                </div>
                                <span class="text-inverse"><?php echo $pourcentagetab ?>   %</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" role="progressbar" style="width: <?php echo $pourcentagetab ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- charts -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                    <h5 class="card-title ">PRODUCT SALES</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-cyan"></i> Tableaux</li>
                                            <li><i class="fa fa-circle text-primary"></i> Cadeaux</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart2" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">ORDER STATS</h5>
                                        <div id="morris-donut-chart" class="ecomm-donute"></div>
                                        <ul class="list-inline m-t-30 text-center">
                                            <li class="p-r-20">
                                                <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Achat</h5>
                                                <h4 class="m-b-0"><?php echo $resultc ?></h4>
                                            </li>
                                            <li class="p-r-20">
                                                <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> Cadeaux</h5>
                                                <h4 class="m-b-0"><?php echo $nbcad ?></h4>
                                            </li>
                                            <li>
                                                <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> Tableaux</h5>
                                                <h4 class="m-b-0"><?php echo $nbtab ?></h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- charts -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php include'right_sidebar.php'  ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
                   <?php include'footer.php'  ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/ecom-dashboard.js"></script>
</body>

</html>