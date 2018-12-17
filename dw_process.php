<!--PROCESSING -->



<!DOCTYPE html>
<html>
<head>
	<title>Processing...</title>
</head>
<body>

</body>
</html>



<?php
$get_url = $_GET["url"];
$get_msg = $_GET["msg"];


if ($_GET["embedtrue"] == TRUE) {
	$curl = curl_init($get_url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("content" => "","embed"=> ["description" => "$get_msg"])));
echo curl_exec($curl);
header('Location: http://localhost/d_W/dw.php');
echo "<script type='text/javascript'>alert('Your message has been sent!);</script>";

} else {
$curl = curl_init($get_url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("content" => "$get_msg")));
echo curl_exec($curl);
header('Location: http://localhost/d_W/dw.php');
echo "<script type='text/javascript'>alert('Your message has been sent!);</script>";
}

?>