<?php
session_start();

$db_host = "ec2-184-72-221-140.compute-1.amazonaws.com";
$db_port = "5432";
$db_name = "d7m5scb5paud99";
$db_user = "eetlfjjaajmloj";
$db_password = "6ade99b9a4653348052fe6045c856ad7cf66c3d5a2b9f6035fae2db141e42acd";

$db_connection = pg_connect("host={$db_host} port={$db_port} dbname={$db_name} user={$db_user} password={$db_password}");

$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "SELECT password FROM public.\"siteUsers\" WHERE email = '$email';";
$exists = pg_query($db_connection, $select_query);

$hashed_password = pg_fetch_result($exists, 0, 0);

if(password_verify($password, $hashed_password)){
	$_SESSION["member"] = "yes";
	header("Location: /member.php");
	exit();
}
else{
	$_SESSION["member"] = "no";
	header("Location: /#login_return");
	exit();
}
?>