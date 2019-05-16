<?php
    session_start();

    require ('../functions/databases.php');
    if (!empty($_POST)) {
        if(isset($_POST['Login']) && isset($_POST['Password']) && $_POST['check'] == 'Prophoto') {
            $login = $_POST['Login'];
            $mdp = md5($_POST['Password']);

            $db = connectDB();
            $sql = "SELECT * FROM login_info WHERE Login = ? AND Password = ? ";
            $query = $db->prepare($sql);
            $query->execute(array($login, $mdp));

            if($query->rowCount() >=1) {
                $_SESSION['Login'] = 'Admin';
                header('Location: index.php');
            }
            else {
                header('Location: login.php');
                exit;
            }
        }
        else {
            header('Location: login.php');
            exit;
        }
    }
    else {
        header('Location: login.php');
        exit;
    }
    ?>


