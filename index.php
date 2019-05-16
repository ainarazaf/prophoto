<?php
require ('functions/databases.php');
$req = getNewProducts();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profoto - La référence en photographie</title>
    <meta name="description" content="Le meilleur site de vente de matériels photographques du moment">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap framework main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


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

        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Appareils photo reflex</h2>
                                        <h1>Nikon D850</h1>
                                        <div class="cr__btn">
                                            <a href="produit-1">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/1.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Appareils photo reflex</h2>
                                        <h1>Canon 1Dx Mark II</h1>
                                        <div class="cr__btn">
                                            <a href="produit-2">voir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Nouveautés</h2>
                            <p>Les dernières sorties</p>
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
                                        <a href="produit-<?php echo $results['ID_prod']; ?>">
                                            <img src="images/product/<?php echo $results['Img_name']; ?>.jpg" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="produit-<?php echo $results['ID_prod']; ?>"><?php echo $results['Prod_name']; ?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li><?php echo $results['Price']; ?> €</li>
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

        <!-- Start Testimonial Area -->
        <section class="htc__testimonial__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="ht__testimonial__activation clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="Marque-2">Nikon</a></h4>
                                    <p>« Au cœur de l'image. » Voilà le défi que Nikon ose relever.

                                        Chaque être humain appréhende le monde différemment : joie, tristesse, émerveillement, espoir... et il existe tant d'autres sensibilités encore. Grâce à l'image, nous pouvons capter ces élans du cœur pour les exposer avec force à la face du monde. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/2.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="Marque-2">Canon</a></h4>
                                    <p>Canon est la référence mondiale en matière d'imagerie depuis 80 ans. L'accent mis sur la technologie fait partie de l'ADN d'entreprise de Canon et nous sommes engagés à aider les individus à redéfinir les limites du possible grâce à l'imagerie. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>