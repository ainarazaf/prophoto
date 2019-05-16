<?php
    session_start();
    if(isset($_SESSION['Login'])) {
    require ('../functions/databases.php');
    $br = getAllBrands();
    $vd = getAllVid();
    $cd = getAllCard();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ajout de produit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
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
<?php include 'includes/header.php'; ?>
<!-- Start Contact Area -->
<section class="htc__contact__area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="contact-form-wrap mt--60">
                <div class="col-xs-12">
                    <div class="contact-title">
                        <h2 class="title__line--6">NOUVEAU PRODUIT</h2>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form id="contact-form" action="add.php" method="post" enctype="multipart/form-data">
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="text" name="name" placeholder="Modèle">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h2 class="title__line--6">Marque :</h2>
                                <select class="select__size" name="brand" size="1">
                                    <?php foreach ($br as $brand) { ?>
                                    <option value="<?php echo $brand['ID_brand']; ?>"><?php echo $brand['Brand_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box message">
                                <textarea name="description" placeholder="Description du produit"></textarea>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h2 class="title__line--6">Type de capteur :</h2>
                                <select class="select__size" name="capteur" size="1">
                                <option value="APS-C">APS-C</option>
                                <option value="Full Frame">Full frame</option>
                                </select>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="number" name="resPhoto" placeholder="Résolution Photo">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h2 class="title__line--6">Résolution vidéo :</h2>
                                <select class="select__size" name="video" size="1">
                                    <?php foreach ($vd as $video) { ?>
                                        <option value="<?php echo $video['ID_vid']; ?>"><?php echo $video['Res_type']; ?> (<?php echo $video['Resolution']; ?>)</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h2 class="title__line--6">Type de stockage :</h2>
                                <select class="select__size" name="card" size="1">
                                    <?php foreach ($cd as $card) { ?>
                                        <option value="<?php echo $card['ID_card']; ?>"><?php echo $card['Card_type']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="number" name="price" placeholder="Prix (en €)">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h2 class="title__line--6">Image du produit :</h2>
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="fv-btn" name="Add" value="Add">AJOUTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<?php include 'includes/footer.php'; ?>

</div>
<!-- Body main wrapper end -->

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
    }?>