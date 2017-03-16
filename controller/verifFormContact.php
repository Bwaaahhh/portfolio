<?php
session_start();
require_once'mailPerso.php';
if(isset($_POST['submit'])){

    $err_nom = false ;
    $err_mail = false ;
    $err_phone = false ;

    $name = $_POST['nomPerso'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];


    if($name == "nom & Prenom" || $name == "" ){
        $_SESSION['nameErr'] = "Un prénom est requis";
        $err_nom = true ;
    }else{
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $_SESSION['nameErr'] = "uniquement les lettres et espaces sont autorisés";
            $err_nom = true ;
        }
    }

    if($mail == "mon adresse e-mail" || $mail == ""){
        $err_mail = true ;
        $_SESSION['mailErr'] = "J'ai besoin d'un Email pour vous répondre";
    }else{
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err_mail = true ;
            $_SESSION['mailErr'] = "un véritable email serait pratique pour vous répondre";
        }
    }

    if($phone == "+33" || $phone == ""){
        $err_phone = true ;
        $_SESSION['phoneErr'] = "Un numero serait pratique";
    }else{
        if(!is_numeric($phone)){
            $err_phone = true ;
            $_SESSION['phoneErr'] = "Un bon numero serait pratique";
        }
    }


    if($err_nom == true || $err_mail == true || $err_phone == true){
        var_dump('erreur dans lenvoi du mail');
    }else{
        $to = $mailPerso;
        $from = $_POST['mail'];
        $tel = $_POST['phone'];
        $societe = $_POST['nomSociete'];
        $name = $_POST['nomPerso'];
        $sujet = $_POST['offre'];
        $subject = "Wesh boulet !! Quelqu'un te contacte via le portfolio pour ".$sujet." ";
        $message = "Il s'appelle ".$name." <br /> Sa societe c'est ".$societe.".  <br /> Il te contacte pour ".$sujet." <br /> Son numero de tel ".$tel." <br /> Son mail ".$from."";
        $headers = "Coucou c'est moi";
        $headers = "Content-Type: text/html; charset=\"utf-8\"";
        mail($to,$subject,$message,$headers);
    }
    header('Location: ../index.php?page=contact');
}
