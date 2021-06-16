<?php

include "class.phpmailer.php";
include "class.smtp.php";

$email_user = "lilith37.vl";
$email_password = "gato0123";
$the_subject = "Email de prueba a tu casilla";
$address_to = "ale.eu.rod@gmail.com";
$from_name = "Viviana";
$phpmailer = new PHPMailer();

// ———- datos de la cuenta de Gmail ——————————-
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//———————————————————————–
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo! soy viviana mandando un correo electronico desde una página</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado de vivi</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);

$phpmailer->Send();
?>







