<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if (!isset($_POST['email'],
$_POST['nom'],
$_POST['prenom'],
$_POST['tel'],
$_POST['interets'],
$_POST['objectifs'],
$_POST['temps'],)) {
  echo "ko";
  die();
}
$mail = new PHPMailer(true);
$body = "Nom : " . $_POST['nom'];
$body .= "<br>Prenom : " . $_POST['prenom'];
$body .= "<br>Email : " . $_POST['email'];
$body .= "<br>Tel : " . $_POST['tel'];
$body .= '<br>Intérêts : ' . $_POST['interets'];
$body .= '<br>Objectifs : ' . $_POST['objectifs'];
$body .= '<br>Temps travaillés ces 5 dernières années : ' . $_POST['temps'];
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'warren@entourageformation.com';
$mail->Password   = '27j6JyUyF';
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->setFrom('warren@entourageformation.com', 'Warren Elbaz');
$mail->addAddress('warren@entourageformation.com', 'Infos');
$mail->isHTML(true);
$mail->Subject = 'Demande de formation';
$mail->Body    = $body;
$mail->send();
echo "ok";
