
 <header class="site-header site-header__header-one  ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/resources/light-logo.png" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box @@extra_class">
                            <?php 
                            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            if($curPageName=="index.php")
                            {
                            ?><li class="current "><?php  
                            }else{?>
                            <li>
                                <?php } ?>
                                <a href="index.php">Home</a>
                            </li>
                            <?php 
                            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            if($curPageName=="Evenements.php")
                            {
                            ?><li class="current "><?php  
                            }else{?>
                            <li>
                                <?php } ?>
                            <a href="Evenements.php">Evenements</a>
                            </li>

                                <?php if(!isset($_SESSION['client']))
                                { ?>
                            <li>
                                <a href="#">Produits</a>
                                <ul class="submenu">
                                    <li><a href="AfficherTableaux.php">Tableaux</a></li>
                                    <li><a href="AfficherCadeaux.php">Cadeaux</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <?php 
                            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            if($curPageName=="Articles.php")
                            {
                            ?><li class="current "><?php  
                            }else{?>
                            <li>
                                <?php } ?>
                                <a href="Articles.php">Articles</a>
                            </li>
                            <li>
                                <a href="Connexion.php">Connexion</a>
                                            <ul class="submenu">
                                            <li><a href="Connexion.php">Se connecter</a></li>
                                            <li><a href="Inscription.php">S'inscrire</a></li>
                                        </ul><!-- /.submenu -->
                            </li>
                                <?php 
                              }
                              else
                              {
                                ?>
                            <li>
                                <a href="#">Produits</a>
                                <ul class="submenu">
                                    <li><a href="AfficherTableaux.php">Tableaux</a></li>
                                    <li><a href="MesTableaux.php">Mes Tableaux</a></li>
                                    <li><a href="AfficherCadeaux.php">Cadeaux</a></li>
                                    <li><a href="MesCadeaux.php">Mes Cadeaux</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li>
                                <a href="Articles.php">Articles</a>
                                        <ul class="submenu">
                                            <li><a href="Articles.php">Articles</a></li>
                                            <li><a href="MesArticles.php">Mes Articles</a></li>
                                        </ul><!-- /.submenu -->
                            </li>

                            <?php 
                            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            if($curPageName=="MesAchats.php")
                            {
                            ?><li class="current "><?php  
                            }else{?>
                            <li>
                                <?php } ?>
                                <a href="MesAchats.php">Mes Achats</a>
                            </li>
                            <?php 
                            $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                            if($curPageName=="MonProfil.php")
                            {
                            ?><li class="current "><?php  
                            }else{?>
                            <li>
                                <?php } ?>
                                <a href="MonProfil.php">Mon Profil</a>
                            </li>
                            <li>
                                <a href="Deconnexion.php">Deconnexion</a>
                            </li>
                                <?php 
                                  }
                                  ?>
                    </div><!-- /.navbar-collapse -->
                    <?php
                        require_once  "../Controller/PanierC.php";
                        $panierCHeader= new PanierC();
                        $resultcount=$panierCHeader->countPanier();
                        ?>
                    <div class="right-side-box">
                        <a href="Panier.php" class="site-header__cart"><i class="egypt-icon-supermarket"></i>

                            <!-- /.egypt-icon-supermarket --> <span class="count"> <?php echo $resultcount; ?></span><!-- /.count --></a>
                        <!-- /.site-header__cart -->
                        <a href="#" class="site-header__sidemenu-nav side-menu__toggler">
                            <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                            <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                            <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                        </a><!-- /.site-header__sidemenu -->
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->