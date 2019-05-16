<?php
    require ('../functions/databases.php');

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $capteur = $_POST['capteur'];
    $photo = $_POST['resPhoto'];
    $video = $_POST['video'];
    $card = $_POST['card'];
    $price = $_POST['price'];

    $targetDir = "../images/product/";

    $fileInfo = pathinfo($_FILES["image"]["name"]);
    $filename = $fileInfo['basename'];
    $filetype = $fileInfo['extension'];
    $insertname = $fileInfo['filename'];

    $targetPath = $targetDir . $filename;

    if(isset($_POST['Add']) && !empty($_FILES["image"]["name"])) {
        $allowTypes = array('jpg', 'jpeg', 'png');
        if (in_array($filetype, $allowTypes)) {
            setProduct($brand, $name, $insertname);

            $sql = getLastIndex();
            $id = $sql->fetch();
            $num = $id['ID_prod'];

            setProductDetails($num, $description, $capteur, $photo, $video, $card, $price);

            $source = $_FILES["image"]["tmp_name"];

            header('Content-Type: image/jpeg');

            $w = 290;
            $h = 385;

            $resized = imagecreatetruecolor($w, $h);
            $white = imagecolorallocate($resized, 255 ,255 ,255);
            imagefill($resized, 0, 0, $white);

            list($width, $height) = getimagesize($source);

            $wr = $width/$w;
            $hr = $height/$h;

            if ( $wr > $hr) {
                $dw = $w;
                $dh = $height/$wr;
            }
            else {
                $dw = $width/$hr + 2;
                $dh = $h;
            }

            $posx = ($w - $dw) / 2;
            $posy = ($h - $dh) / 2;

            $origin = imagecreatefromjpeg($source);
            imagecopyresampled($resized, $origin, $posx, $posy, 0, 0, $dw, $dh, $width, $height);

            imagejpeg($resized, $targetPath);
            imagedestroy($resized);
            imagedestroy($source);

            header ('location: product-details.php?Id='.$num);
            exit();
        }
        else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
    else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
?>
