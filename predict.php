<?php  
 include_once("connection.php"); 

    $query1= "SELECT * FROM bins GROUP By binid";
	$result = mysqli_query($connection, $query1);
	$data=array();
	while ($row = mysqli_fetch_assoc($result)){
	$data[]=$row;
	}

	foreach ($data as $value) {

    for($i=0; $i<=14; $i++){
    	$dt=date("Y-m-d");
    	$dat =date("Y-m-d",strtotime( "$dt +".$i." days"));    	
       	$con = mysqli_connect('localhost', 'root', '', 'mibrathe_swin_bins');
    	$rows = mysqli_query($con, "INSERT INTO predicted_data(bin_id,date) VALUES ('$value[binid]','$dat')");
    }

	}
?>