<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mibrathe_swinbins";

	$connection=mysqli_connect($servername, $username, $password, $dbname);
	if(!$connection){
		//Error:unable to connnect to MySQL
		echo "Error:unable to connnect to MySQL." .PHP_EOL;
		exit;
	}
 ?>