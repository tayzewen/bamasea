<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail->Username = $_ENV['Username'];
$mail->Password = $_ENV['Password'];

$mail->SetFrom($email, $name);
$mail->addAddress("taylor@taylorzewen.com");

$mail->Subject = "New Bama Message";
$mail->Body = $message;

$mail->send();

echo "email sent";

?>