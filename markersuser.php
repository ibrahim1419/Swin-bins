<?php

header('Access-Control-Allow-Origin: *');  
require "connection.php";
$empid=$_GET['id'];
// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the bin_details table

//$query = "SELECT * FROM bin_details WHERE 1";
$query= "SELECT bindetails.binid,bindetails.location,bindetails.latitude,bindetails.Priority,bindetails.longitude,bindetails.bintype,bindetails.area,bindetails.zone,bindetails.tags,bindata.fill,bindata.battery,bindata.date ,bindata.time,bincategory.binlength
     FROM (bindetails INNER JOIN bindata ON bindetails.binid=bindata.binid INNER JOIN bincategory ON bindetails.bintype=bincategory.bintype)
     WHERE CONCAT(bindata.date,'',bindata.time) = (SELECT MAX(CONCAT(bindata.date,'',bindata.time))
     FROM bindata WHERE bindetails.binid = bindata.binid) AND bindetails.empid='1'";
					
$result = mysqli_query($connection, $query);

if ($result == NULL) {
  die('Invalid query: ' . mysqli_error($connection));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['binid']);
  $newnode->setAttribute("name",$row['location']);
  $newnode->setAttribute("address", $row['area']);
  $newnode->setAttribute("lat", $row['latitude']);
  $newnode->setAttribute("lng", $row['longitude']);
  $newnode->setAttribute("type", $row['bintype']);
  $newnode->setAttribute("fill", $row['fill']);
  $newnode->setAttribute("battery", $row['battery']);
  $newnode->setAttribute("timeLastUpdate", $row['time']);
  $newnode->setAttribute("lastUpdate", $row['date']);
  $newnode->setAttribute("fillHeight", $row['binlength']);
  $newnode->setAttribute("tags", $row['tags']);
  $newnode->setAttribute("Priority", $row['Priority']);
  $newnode->setAttribute("zone", $row['zone']);
  $newnode->setAttribute("area", $row['area']);
}

echo $dom->saveXML();



?>