<?php
$db_host = "ec2-184-72-221-140.compute-1.amazonaws.com";
$db_port = "5432";
$db_name = "d7m5scb5paud99";
$db_user = "eetlfjjaajmloj";
$db_password = "6ade99b9a4653348052fe6045c856ad7cf66c3d5a2b9f6035fae2db141e42acd";

$db_connection = pg_connect("host={$db_host} port={$db_port} dbname={$db_name} user={$db_user} password={$db_password}");

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$select_query = "SELECT 1 FROM public.\"siteUsers\" WHERE email = '$email';";
$exists = pg_query($db_connection, $select_query);

if(pg_num_rows($exists) != 0){
	header("Location: /#signup_return");
	exit();
}
else{
	$insert_query = "INSERT INTO public.\"siteUsers\" VALUES ('$name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')";
	$result = pg_query($db_connection, $insert_query);

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
    $mail->Subject = 'Joystick Account Creation';
    $mail->Body    = nl2br("Thank you for creating an account, find stickers to match your style today!");
    $mail->send();
} catch (Exception $e) {
    echo 'Unable to send message. Mailer Error: ', $mail->ErrorInfo;
}


	header("Location: /#signup_success");
	exit();
}
?>