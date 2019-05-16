<?php
/* Page: contact.php */

$myMail="aina.razafindrakoto@hotmail.com";

if(isset($_POST['send'])) {
    if(empty($_POST['email'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    else {
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        else {
            if(empty($_POST['subject'])) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
            else {
                if(empty($_POST['message'])) {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
                else {
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=iso-8859-1\r\n";
                    $Entetes .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
                    $Entetes .= "Reply-To: Prophoto <".$_POST['email'].">\r\n";

                    $Mail=htmlentities($_POST['email'],ENT_QUOTES,"ISO-8859-1");
                    $Sujet=htmlentities($_POST['subject'],ENT_QUOTES,"ISO-8859-1");
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"ISO-8859-1");

                    if(mail($myMail,utf8_encode($Sujet),nl2br($Message),$Entetes)) { //la fonction nl2br permet de conserver les sauts de ligne et la fonction urf8_encore de conserver les accents dans le titre
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                    else {
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit;
                    }
                }
            }
        }
    }
}
?>