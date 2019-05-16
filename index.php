<?php
    session_start();
    if(isset($_SESSION['Login'])) {
        require ('../functions/databases.php');
        $req = getAllProducts();
        ?>
        <!doctype html>
        <html class="no-js" lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Profoto - Administration</title>
            <meta name="description" content="Le meilleur site de vente de matériels photographques du moment">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Place favicon.ico in the root directory -->
            <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpg">
            <link rel="apple-touch-icon" href="apple-touch-icon.png">


            <!-- All css files are included here. -->
            <!-- Bootstrap framework main css -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <!-- Owl Carousel min css -->
            <link rel="stylesheet" href="../css/owl.carousel.min.css">
            <link rel="stylesheet" href="../css/owl.theme.default.min.css">
            <!-- This core.css file contents all plugings css file. -->
            <link rel="stylesheet" href="../css/core.css">
            <!-- Theme shortcodes/elements style -->
            <link rel="stylesheet" href="../css/shortcode/shortcodes.css">
            <!-- Theme main style -->
            <link rel="stylesheet" href="../style.css">
            <!-- Responsive css -->
            <link rel="stylesheet" href="../css/responsive.css">
            <!-- User style -->
            <link rel="stylesheet" href="../css/custom.css">


            <!-- Modernizr JS -->
            <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        </head>

        <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Body main wrapper start -->
        <div class="wrapper">

            <?php include 'includes/header.php'; ?>
            <!-- Start Category Area -->
            <section class="htc__category__area ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section__title--2 text-center">
                                <h2 class="title__line">Tous les produits</h2>
                            </div>
                        </div>
                    </div>
                    <div class="htc__product__container">
                        <div class="row">
                            <div class="product__list clearfix mt--30">
                                <?php foreach ($req as $results) { ?>
                                    <!-- Start Single Category -->
                                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                        <div class="category">
                                            <div class="ht__cat__thumb">
                                                <a href="product-details.php?Id=<?php echo $results['ID_prod']; ?>">
                                                    <img src="../images/product/<?php echo $results['Img_name']; ?>.jpg" alt="product images">
                                                </a>
                                            </div>
                                            <div class="fr__product__inner">
                                                <h4><a href="product-details.php?Id=<?php echo $results['ID_prod']; ?>"><?php echo $results['Prod_name']; ?></a></h4>
                                                <ul class="fr__pro__prize">
                                                    <li><div class="cr__btn">
                                                            <a href="product-details.php?Id=<?php echo $results['ID_prod']; ?>">voir</a>
                                                        </div></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Category -->
                                <?php }
                                $req->closeCursor();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Category Area -->

            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- Body main wrapper end -->

        <!-- Placed js at the end of the document so the pages load faster -->

        <!-- jquery latest version -->
        <script src="../js/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap framework js -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- All js plugins included in this file. -->
        <script src="../js/plugins.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <!-- Waypoints.min.js. -->
        <script src="../js/waypoints.min.js"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="../js/main.js"></script>

        </body>

        </html>
    <?php }
    else {
        header('location: login.php');
    }
    ?>