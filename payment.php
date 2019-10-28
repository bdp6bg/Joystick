<?php

$email = $_POST['email'];
$amount = $_POST['amount_input'];

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