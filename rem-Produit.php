<?php
    require('../functions/databases.php');

    $id = $_GET['Id'];

    $db = connectDB();

    $sql = "DELETE FROM products WHERE ID_prod = ?";
    $stmt = $db->prepare($sql);

    $stmt->execute([$id]);

    $sq2 = "DELETE FROM prod_details WHERE ID_prod = ?";
    $stmt2 = $db->prepare($sq2);

    $stmt2->execute([$id]);

    $increment = "ALTER TABLE products AUTO_INCREMENT = ?";
    $req = $db->prepare($increment);

    $req->execute([$id]);

    header('Location: index.php');

    ?>
