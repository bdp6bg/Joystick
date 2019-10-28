<?php
$db_host = "ec2-184-72-221-140.compute-1.amazonaws.com";
$db_port = "5432";
$db_name = "d7m5scb5paud99";
$db_user = "eetlfjjaajmloj";
$db_password = "6ade99b9a4653348052fe6045c856ad7cf66c3d5a2b9f6035fae2db141e42acd";

$db_connection = pg_connect("host={$db_host} port={$db_port} dbname={$db_name} user={$db_user} password={$db_password}");

$email = $_POST['email'];
$amount = $_POST['amount'];

$resourceUrl = 'https://test.bitpay.com/invoices';

$postData = json_encode([
   'currency' => 'BTC',
   'price' => $amount,
   'token' => 'FrGmGAs6GqnC9yjaFe1cQw5QZvSDcV2ydH1tGAHHYLo7'
]);

$curlCli = curl_init($resourceUrl);

curl_setopt($curlCli, CURLOPT_HTTPHEADER, [
   'x-accept-version: 2.0.0',
   'Content-Type: application/json'
]);

curl_setopt($curlCli, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curlCli, CURLOPT_POSTFIELDS, stripslashes($postData));

$result = curl_exec($curlCli);
$resultData = json_decode($result, TRUE);
curl_close($curlCli);

echo $resultData;

?>