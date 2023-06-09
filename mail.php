<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require '/var/www/vitrineSite/phpmailer/PHPMailer/src/Exception.php';
require '/var/www/vitrineSite/phpmailer/PHPMailer/src/PHPMailer.php';
require '/var/www/vitrineSite/vendor/phpmailer/PHPMailer/src/SMTP.php';

$sujet = ""; 
$message = ""; 
$to = "";


if ( isset( $_POST['submit'] ) ) {
    /* récupérer les données du formulaire en utilisant 
       la valeur des attributs name comme clé 
      */
    $sujet = $_POST['name']; 
    $message = $_POST['message']; 
    $to = $_POST['email'];
    // afficher le résultat
 }else{
    header("Location: index.php");
    die();
 }

//envoi de l'e-mail
smtpmailer($to,$sujet,$message);


//fonction e-mail
function smtpmailer($to,$sujet,$message){

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->IsHTML();    
    $mail->Host='localhost';
    $mail->SMTPDebug=0;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Host='smtp.ionos.fr';
    $mail->Port=465;
    $mail->Username='contact@jboisgard.fr';
    $mail->Password=''; //ton mdp gmail
    $mail->SetFrom('contact@jboisgard.fr');
    $mail->CharSet="utf-8";
    $mail->Subject = $sujet;
    $mail->Body = $message." <br />email : ". $to;
    $mail->AddAddress('contact@jboisgard.fr');
         
    if(!$mail->Send()){
        Header("Location: index.php?mail=false");
    }else{
        Header("Location: index.php?mail=true");
    }
} //fin fonction e-mail
 


?>