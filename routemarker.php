<?php

header('Access-Control-Allow-Origin: *');  
require "connection.php";

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the bin_details table

//$query = "SELECT * FROM bin_details WHERE 1";
$query= "SELECT bindetails.binid,bindetails.location,bindetails.latitude,bindetails.Priority,bindetails.longitude,bindetails.bintype,bindetails.area,bindetails.zone,bindetails.tags,bindata.fill,bindata.battery,bindata.date ,bindata.time,bincategory.binlength FROM (bindetails INNER JOIN bindata ON bindetails.binid=bindata.binid INNER JOIN bincategory ON bindetails.bintype=bincategory.bintype) WHERE CONCAT(bindata.date,'',bindata.time) = (SELECT MAX(CONCAT(bindata.date,'',bindata.time)) FROM bindata WHERE bindetails.binid = bindata.binid) and fill >50";
					
$result = mysqli_query($connection, $query);

if ($result == NULL) {
  die('Invalid query: ' . mysqli_error($connection));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("routemarker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['binid']);
  $newnode->setAttribute("rlat", $row['latitude']);
  $newnode->setAttribute("rlng", $row['longitude']);

}

echo $dom->saveXML();



?>