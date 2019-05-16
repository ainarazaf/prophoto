<?php
function connectDB() {
    try
    {
	    $db = new PDO('mysql:host=localhost:3306;dbname=propwvqq_db_prophoto;charset=utf8', 'propwvqq_db', 'prophotoadmin');
	    return $db;
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
}

function getAllProducts() {
    $db = connectDB();
    $query = 'SELECT p.ID_prod, p.Prod_name, p.Img_name, d.Price FROM products p INNER JOIN prod_details d WHERE d.ID_prod = p.ID_prod';
    $req = $db->query($query);
    return $req;
}

function getNewProducts() {
    $db = connectDB();
    $query = 'SELECT p.ID_prod, p.Prod_name, p.Img_name, d.Price FROM products p INNER JOIN prod_details d WHERE d.ID_prod = p.ID_prod ORDER BY p.ID_prod DESC LIMIT 6';
    $req = $db->query($query);
    return $req;
}

function getProductsByBrand($id) {
    $db = connectDB();
    $query = 'SELECT p.ID_prod, p.Prod_name, p.Img_name, d.Price FROM products p INNER JOIN prod_details d ON d.ID_prod = p.ID_prod WHERE p.ID_brand = '.$id;
    $req = $db->query($query);
    return $req;
}

function getAllBrands() {
    $db = connectDB();
    $query = 'SELECT * FROM brands';
    $req = $db->query($query);
    return $req;
}

function getBrandById($id) {
    $db = connectDB();
    $query = 'SELECT * FROM brands WHERE ID_brand ='.$id;
    $req = $db->query($query);
    return $req;
}

function getProduitByID($id) {
    $db = connectDB();
    $query = 'SELECT p.ID_prod, p.Prod_name, p.ID_brand, p.Img_name, d.Description, d.Capteur, d.Res_photo, d.ID_vid, d.ID_card, d.Price FROM products p INNER JOIN prod_details d ON d.ID_prod = p.ID_prod WHERE p.ID_prod = '.$id;
    $req = $db->query($query);
    $result = $req->fetch();
    return $result;
}

function getResVid($id) {
    $db = connectDB();
    $query = 'SELECT * FROM res_video WHERE ID_vid ='.$id;
    $req = $db->query($query);
    return $req;
}

function getCard($id) {
    $db = connectDB();
    $query = 'SELECT * FROM cards WHERE ID_card ='.$id;
    $req = $db->query($query);
    return $req;
}

function getAllVid() {
    $db = connectDB();
    $query = 'SELECT * FROM res_video';
    $req = $db->query($query);
    return $req;
}

function getAllCard() {
    $db = connectDB();
    $query = 'SELECT * FROM cards';
    $req = $db->query($query);
    return $req;
}

function getLastIndex() {
    $db = connectDB();
    $query = 'SELECT * FROM products ORDER BY ID_prod DESC LIMIT 1';
    $req = $db->query($query);
    return $req;
}

function setProduct($id_brand, $name, $image) {
    $db = connectDB();
    $query = 'INSERT INTO products(ID_brand, Prod_name, Img_name) VALUES (?, ?, ?)';
    $stmt = $db->prepare($query);
    $stmt->execute([$id_brand, $name, $image]);
}

function setProductDetails($id_prod, $description, $capteur, $photo, $vid, $card, $price) {
    $db = connectDB();
    $query = 'INSERT INTO prod_details (ID_prod, Description, Capteur, Res_photo, ID_vid, ID_card, Price) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $db->prepare($query);
    $stmt->execute([$id_prod, $description, $capteur, $photo, $vid, $card, $price]);
}