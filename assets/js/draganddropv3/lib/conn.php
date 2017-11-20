<?php

//------------------- connect to your database

$dbhost							= "localhost";
$dbuser							= "root";
$dbpass							= "root";
$dbname							= "sort";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysql_select_db($dbname);
mysql_query("SET CHARACTER SET 'utf8'", $conn);
mysql_query("SET NAMES 'utf8'", $conn);

?>
