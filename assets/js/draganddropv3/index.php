<!-- CODE LICENSE

Author for this code: SOWebDesign.com
License:              For commercial Use on Purchase
Credits:              Jquery UI
-->
<? include('lib/functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Drag and Drop to Database Order sort</title>

<!-- STYLE SHEETS -->
<link href="css/main.css" rel="stylesheet" type="text/css" />

</head>

<body>


<!----------------------------------- SORT LIST TWO COLUMNS (3) -->
<div class="col">
<div id="wrapper">
<h1>Sort List into Two Columns</h1>
<p>This is a basic drag and drop effect that allows you to sort the order of the list elements without saving. This can be implemented quickly to a number of different fields and areas or forms.</p>
<p>The javascript for this section is clearly labelled in the js/jsfunctions.js file where you can amend and add functions for each of these sections</p>
<ul id="sortlistThree" class="connectMe">
<?php
                include_once("connection.php");
                $query  = "SELECT * FROM bindetails ORDER BY binid ASC ";
                $result = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_array($result))
                {
                    
                $id = stripslashes($row['binid']);
                $text = stripslashes($row['location']);
                    
                ?>
            <li id="arrayorder_<?php echo $id; ?>">  <?php echo $id; ?> </br>  <?php echo $text; ?> 
<?php } ?>
</ul>

<ul id="sortlistThree" class="connectMe">
<?php
                 $yid="emp001";
                include_once("connection.php");
                $query1  = "SELECT * FROM bindetails WHERE empid='$yid' group by empid";
                $result1 = mysqli_query($connection, $query1);
                

                while($row1= mysqli_fetch_array($result1))
                {
                    
                $empid = stripslashes($row1['empid']);
                $text1 = stripslashes($row1['zone']);
                    
                ?>
            <li id="arrayorder_<?php echo $empid; ?>"> <?php echo $empid; ?> </br> <?php echo $text1; ?>
            <div class="clear"></div>
            </li>
             <?php } ?>

</ul>	
<div class="clear"></div>		
</div>
</div>

<!----------------------------------- END -->


<!-- JAVASCRIPT (FOR MYSQL TO SAVE THE JS FUNCTIONS FILE MYST BE BELOW THE CODING) -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jqueryUI.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/touch.js"></script>
<script type="text/javascript" src="js/jsfunctions.js"></script>






</body>
</html>
