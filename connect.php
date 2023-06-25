<!DOCTYPE html>
<?php
	//header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$basename = "amdb";

	$dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error connecting to MySQL server.'.mysqli_error($dbc));
	mysqli_set_charset($dbc, "utf8");
	if($dbc){
		
	}
?>

<body>
	
</body>
</html>