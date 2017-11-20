<?php

include('conn.php');

//-------------------- SORT TABLE FUNCTION

function sortTable(){

//----------------- AMENDABLE VARIABLE
$table = "sortme";

$sql = mysql_query("SELECT * FROM $table order by ABS(orderList) ASC");
$num = mysql_num_rows($sql);
while($row = mysql_fetch_assoc($sql)){

echo "<li class='ui-state-default' id='ID_".$row['list_id'] ."'>".$row['title']."</li>";
}
}

function sortTableTwo(){

//----------------- AMENDABLE VARIABLE
$table = "sortme";

$sql = mysql_query("SELECT * FROM $table order by ABS(orderList) ASC");
$num = mysql_num_rows($sql);
while($row = mysql_fetch_assoc($sql)){

echo "<li class='ui-state-default' id='ID_".$row['list_id'] ."'>".$row['title']."</li>";
}
}

?>

