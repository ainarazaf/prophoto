<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Login || Prophoto</title>


    <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.jpg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


</head>

<body>

<div class='login'>
    <div class='login_title'>
        <span>Se connecter</span>
    </div>
    <form action="connect.php" method="post">
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
            </div>
            <input placeholder='Login' type='text' name="Login">
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
            </input>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
            </div>
            <input placeholder='Mot de passe' type='password' name="Password">
            <input type="hidden" name="check" value="Prophoto">
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='submit' value='Se connecter'>
        </div>

        <div class="disclaimer">
            <p>Veuillez entrer vos informations de connexion</p>
        </div>

    </div>
    </form>
</div>

<script  src="js/index.js"></script>

</body>

</html>
