<?php

require "connection.php";

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the bin_details table

//$query = "SELECT * FROM bin_details WHERE 1";
$query= "SELECT * FROM driver WHERE 1";
          
$result = mysqli_query($connection, $query);

if ($result == NULL) {
  die('Invalid query: ' . mysqli_error($connection));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("driver");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['username']);
  $newnode->setAttribute("lat", $row['latitude']);
  $newnode->setAttribute("lng", $row['longitude']);
}

echo $dom->saveXML();