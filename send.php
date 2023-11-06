<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

$mail->Username = "randomusername9087@gmail.com";//ваша почта gmal
$mail->Password = "hdsjowoieowiq";
$mail->SMTPSecure = 'ssl';
$mail->Port = 25;

$mail->setFrom($mail->Username, $mail->Password);
$mail->addAddress($_POST['email']);

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

if ($mail->send()) {
    header('Location: sent.html');
} else {
    echo 'Ошибка: ' . $mail->ErrorInfo;
}