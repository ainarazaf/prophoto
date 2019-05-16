<?php $reqBr = getAllBrands(); ?>
<!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                     <a href="Accueil"><img src="images/logo/logo.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="Accueil">Accueil</a></li>
                                        <li class="drop"><a href="Tous-Les-Produits">Produits</a>
                                            <ul class="dropdown">
                                                <li><a href="Tous-Les-Produits">Tous les produits</a></li>
                                                <?php
                                                $reqBra = getAllBrands();
                                                foreach ($reqBra as $rslt) { ?>
                                                <li><a href="Marque-<?php echo $rslt['ID_brand']; ?>"><?php echo $rslt['Brand_name']; ?></a></li>
                                                <?php }
                                                $reqBra->closeCursor();
                                                ?>
                                            </ul>
                                        </li>
                                        <li><a href="Contact">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="Accueil">Accueil</a></li>
                                            <li><a href="Tous-Les-Produits">Produits</a>
                                                <ul>
                                                    <li><a href="Tous-Les-Produits">Tous les produits</a></li>
                                                    <?php foreach ($reqBr as $results) { ?>
                                                        <li><a href="Marque-<?php echo $results['ID_brand']; ?>"><?php echo $results['Brand_name']; ?></a></li>
                                                    <?php }
                                                    $reqBr->closeCursor();
                                                    ?>
                                                </ul>
                                            </li>
                                            <li><a href="Contact">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
<!-- End Header Area -->