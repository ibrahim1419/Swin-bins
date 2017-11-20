<?php
  // get post item

    include("connection.php");  

    // Add into Sales table
        

        $query= "INSERT INTO employees(firstname, lastname, email, phone) VALUES 
        ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["phone"]."')";
        
        if (mysqli_query($connection, $query)) {

             echo "<div>
                <script>
                        window.alert('Record added successfully!');
                        window.location.href = 'users.php';
                </script>
                </div>";
            }
         else {
            echo "Error: $sql <br />" . mysqli_error($connection);
        }
    
    mysqli_close($connection);
?>