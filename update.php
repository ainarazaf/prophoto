<?php
    require ('../functions/databases.php');
    $db = connectDB();
    $new_price = $_POST['newprice'];
    if(ctype_digit($new_price)) {
        $id = $_GET['Id'];
        $sql = 'UPDATE prod_details SET Price = ? WHERE ID_prod = ?';
        $query = $db->prepare($sql);
        $query ->execute([$new_price, $id]);
        header ('location: product-details.php?Id='.$id);
    }
    else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }