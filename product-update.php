<?php
session_start();
if(isset($_SESSION['Login'])) {
    require ('../functions/databases.php');
    $db = connectDB();
    $id = $_GET['Id'];
    $prod = getProduitByID($id);
    ?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $prod['Prod_name']; ?></title>
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


<?php include 'includes/header.php'; ?>

<div class="body__overlay"></div>
<section class="htc__contact__area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="contact-form-wrap mt--60">
                <div class="col-xs-12">
                    <div class="contact-title">
                        <h2 class="title__line--6">Changement de prix</h2>
                    </div>
                    <div class="contact-title">
                        <h2 class="title__line--6"><?php echo $prod['Prod_name']; ?></h2>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form id="contact-form" action="update.php?Id=<?php echo $prod['ID_prod']; ?>" method="post">
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <h3 class="title__line--6">Ancien Prix : </h3>
                                <input type="text" name="ancient" placeholder="<?php echo $prod['Price']; ?> €">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <h3 class="title__line--6">Nouveau Prix : </h3>
                                <input type="number" class="input-sm" name="newprice">
                            </div>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="fv-btn">CHANGER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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
<?php }
    else {
        header('location: login.php');
    }?>

