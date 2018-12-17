<!-- LOGGED IN -->



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Logged in!</title>
</head>
<body>

	<form action="dw_process.php" method="get">
		<div class="error_msg" id="error_div">
      <p id="error_div_msg">
      </p>
    </div>
     <script type="text/javascript">document.getElementById("error_div").style.display= "none";</script>
		<input type="text" name="msg" placeholder="Enter your message" class="input-group">
		<br>
		<input type="text" name="url" placeholder="Enter webhook url again!">
		<br>
		<br>
		<input class="btn"type="submit" name="sub_btn" value="Send">
	</form>

</body>
</html>


<?php

$url = $_GET["url"];
$json_content = file_get_contents($url);
$json_decode = json_decode($json_content);

echo "<script type='text/javascript'>document.getElementById('error_div').style.display= 'block';</script> <script type='text/javascript'> document.getElementById('error_div_msg').innerHTML = 'Logged in as `$json_decode->name`' </script> <img src=''"


?>