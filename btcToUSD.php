<?php

$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, TRUE);

$lastPrice = $json["last"];

$date = date("m/d/Y   h:i:sa");
?>

<!DOCTYPE html>
<html>
<head>
<title>BTC Widget</title>
<style>
body{
    font-family: "Arial", sans-serif;
}
#container{
	width: 200px;
	height: 40px;
	overflow: hidden;
	background-color: #2f2f2f;
	border: 1px solid #000;
	border-radius: 5px;
	color: #fefdfb;
}
#lastPrice{
	font-size: 14px;
	font-weight: bold;
}
#dateTime{
	font-size: 12px;
	color: #999;
}
</style>
</head>
<body>
<div id="container">
<table width="100%">
<tr>
	<td rowspan="3" width="60%" id="lastPrice">
	<?php echo "1 BTC = $", number_format($lastPrice, 2); ?>
	</td>
	<td align="bottom" colspan="2" id="dateTime">
	<?php echo $date; ?>
	</td>
</tr>
</table>
</div>
</body>
</html>
