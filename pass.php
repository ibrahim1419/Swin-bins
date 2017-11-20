<html>
<body>
<?php
include "connection.php";
session_start(); 

$uid="1000";
$fn = "Namakambo";
$lasn = "Muyunda";
$un = "Admin";
$em = "admin@swin-bins.com";
$pass = "12345";
$empid = "1000";
$al = "1";

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$level = $_POST['access_level'];
$password = $_POST['password'];

// A higher "cost" is more secure but consumes more processing power
$cost = 10;

// Create a random salt
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Hash the password with the salt
$hash = crypt($pass, $salt);
 
 $sql = "INSERT INTO user (userid,user_name,first_name,last_name,email,hash,empid,access_level)
 VALUES ('$uid','$un','$fn','$lasn','$em','$hash','$empid','$al')";
 if ($connection->query($sql) === TRUE) {
	//OK!
 } else {
	echo "Error: " . $sql . "<br>" . $connection->error;
 }

 $connection->close();
?>
</body>
</html>