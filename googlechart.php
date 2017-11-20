<?php 
/* Open connection to "zing_db" MySQL database. */
$mysqli = new mysqli("localhost", "root", "", "mibrathe_swinbins");
$id=$_GET['id']; 
 
/* Check the connection. */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    $data=mysqli_query($mysqli,"SELECT * FROM bindata WHERE date > DATE_SUB(NOW(), INTERVAL 7 DAY) AND binid='$id' ");
    $data1=mysqli_query($mysqli,"SELECT * FROM predicteddata WHERE date > DATE_SUB(NOW(), INTERVAL 7 DAY) AND binid='$id' ");?>
<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['fill'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
var myData1=[<?php 
while($info1=mysqli_fetch_array($data1))
    echo $info1['fill'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($mysqli,"SELECT * FROM predicteddata WHERE date > DATE_SUB(NOW(), INTERVAL 7 DAY) AND binid='$id'");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['date'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];



</script>
<?php
/* Close the connection */
$mysqli->close(); 
?>
<html>

<!DOCTYPE html>
<html>
	<head>
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script></head>
	<body>
		<div id='myChart'></div>
	</body>
</html>
<script type="text/javascript">
window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:300,
    data:{
    "type":"line",
    "title":{
        "text":"Daily fill level and predicted fill level"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
            
        },
        {
            "values":myData1
            
        }
]
}
});
};
</script>