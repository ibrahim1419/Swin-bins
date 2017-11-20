<?php 
	include "connection.php";
	session_start();
		
	if(isset($_POST['login_username']) && isset($_POST['login_password'])){
	
		$getPass = mysqli_fetch_assoc(mysqli_query($connection, "SELECT hash FROM user WHERE user_name = '".$_POST['login_username']."'"));
		
		if($getPass == NULL){
			//no user found
			echo "invalid user"; 
		}
		else {
			$hash= $getPass['hash'];
			
			if (hash_equals($hash, crypt($_POST['login_password'], $hash)) ) {
				  // PASS OK!
				$query ="SELECT * FROM user WHERE user_name='".$_POST['login_username']."'";
				$result = mysqli_query($connection,$query);
				$rows = mysqli_num_rows($result);

				if($rows>0){
					$row = mysqli_fetch_assoc($result);
					if($row["access_level"] == 1){
						$_SESSION['user']= "admin";
					}
					if($row["access_level"] == 2){
						$_SESSION['user']= "employee";			
					}
					$_SESSION['user_id']= $row["user_name"];
					$sql = "UPDATE user SET last_login=CURRENT_TIME() WHERE user_name='".$_POST['login_username']."'";
						if ($connection->query($sql) === TRUE) {
							//OK!
						} else {
							echo "Error: " . $sql . "<br>" . $connection->error;
						}
					$connection->close();
					
					if(isset($_SESSION['redirect']) && $_SESSION['redirect']==true ){
						$_SESSION['redirect'] = false;
						//echo "redirect";
						$location = $_SESSION['location'];
						$location = 'Location: '. $location;
						header($location);
					}
					else{
						header('Location: index.php');
					}					
					
				}else{
					echo "user has no access";	
				}
			}
			else{
				echo "invalid password";
			}
		}
	}else
		echo "error,no data received";	
?>