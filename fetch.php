<?php
 
include('connection.php');
 

$query = "SELECT * FROM `bindata` where battery <= 2 group BY binid";
$result = mysqli_query($connection, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '
  <li>
  <a href="#">
  <strong>'.$row["binid"].' is low on battery</strong><br />
  <small><em>'.$row["battery"].'</em></small>
  </a>
  </li>
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
 

 
$status_query = "SELECT * FROM `bindata` where battery <= 2 group BY binid";
$result_query = mysqli_query($connection, $status_query);
$count = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
 
echo json_encode($data);

?>