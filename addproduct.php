<?php
  // get post item

	include "connection.php";		


		$query= "INSERT INTO bindetails(binid, location, latitude, longitude, bintype, tags,Priority ,zone) VALUES ('".$_POST["binid"]."','".$_POST["location"]."','".$_POST["latitude"]."','".$_POST["longitude"]."','".$_POST["bintype"]."','".$_POST["tags"]."','".$_POST["priority"]."','".$_POST["zone"]."')";
		
        if (mysqli_query($connection, $query)) {
             echo "<div>
                <script>
                        window.alert('Record added successfully!');
                        window.location.href = 'products.php';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }
    
    mysqli_close($connection);
?>
