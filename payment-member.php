<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


$email = $_POST["email"];
$amount = $_POST['amount_input'];
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
	$mail->setFrom('joystickemail123@gmail.com', 'Joystick');
    $mail->addAddress($email);
    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Joystick Purchase';
    $mail->Body    = nl2br("Thank you for your purchase of $amount BTC, please complete the BitCoin payment to receive your stickers!");
    $mail->send();
} catch (Exception $e) {
    echo 'Unable to send message. Mailer Error: ', $mail->ErrorInfo;
}



$resourceUrl = 'https://test.bitpay.com/invoices';
$postData = json_encode([
   'currency' => 'BTC',
   'price' => ($amount),
   'token' => '3twsth1x4d5KWJxf32xRUe8vhRtkefFjQcc3uDnY9cE9',
   'redirectURL' => 'https://joystick-cs4753.herokuapp.com/member.php#store_success'
   ]);

   $ch = curl_init($resourceUrl);      
   curl_setopt($ch, CURLOPT_HTTPHEADER, [
	'x-accept-version: 2.0.0',
	'Content-Type: application/json']);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, stripslashes($postData));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // execute

    $result_decoded = json_decode($result);
	$returnURL = $result_decoded->data->url;
	header("Location: $returnURL");	



?>