<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$url = "Location: #contact_success";
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joystickemail123@gmail.com';
    $mail->Password = 'Password456!';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('joystickemail123@gmail.com');
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Customer Inquiry';
    $mail->Body    = nl2br("$name\n\n$email\n\n$message");
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Unable to send message. Mailer Error: ', $mail->ErrorInfo;
}

header($url);

//exit();
?>
