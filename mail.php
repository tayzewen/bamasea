<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
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

$mail->Username = "tayzewen@gmail.com";
$mail->Password = "quoiwqxmnrraluqi";

$mail->SetFrom($email, $name);
$mail->addAddress("taylor@taylorzewen.com");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";

?>