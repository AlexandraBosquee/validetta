<?php

$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mes = $_POST['message'];


$to      = 'alexandra.bosquee.16578@stu.he-ferrer.eu';
$subject = $nom;
$message = $mes;
$headers = 'From: '.$mail. "\r\n" .
    'Reply-To: '.$mail. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>