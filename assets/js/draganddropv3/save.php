<?

include('connection.php'); 

$table = "`sortme`";

//------------------- save order to database



$order = $_POST['ID'];
$k  = 1;

$str = implode(",", $order);

foreach ($order as $k => $val){
	
	$query  = "UPDATE $table SET `orderList` = ".$k;
	$query .= " WHERE `list_id` = ".$val;
	
	$res = mysql_query($query);
	
	if (!$res)
		echo mysql_error()."<br />";
	
	
}
echo "Changes Saved";


?>
	