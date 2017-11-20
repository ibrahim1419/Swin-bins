<?php
 include_once("connection.php"); 
 
$id=$_GET['id'];  
$zone=$_GET['zone'];
$battery=$_GET['battery'];
$fillLevel=$_GET['fillLevel'];
$lastUp=$_GET['lastUp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">

    <!-- Page Title -->
    <title> Swin-Bins </title>

    <!-- Favicon and Touch Icons -->
    <link href="assets/images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="assets/images/favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
    



    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src= "assets/js/zingchart.min.js"></script>
    <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
  
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- Modal content-->
      <div class="modal-content">
     <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"  id="mBinID"><?php echo $id; ?></h4>
    </div>
         <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card">
                <div class="card-content">
                 <strong>Zone</strong></br>  <span id="mBinName"> <?php echo $zone; ?> </span><br /> </br>
                 <strong>Last Updated</strong></br> <span id="mBinUp"><?php echo $lastUp; ?></span><br /><br />
                 <strong>Tags</strong></br> <span id="mBinUp">Hospitals, clinics</span><br /><br /><br />
                </div>
            </div>        

          </div> 
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
            <div class="card">
                <div class="card-content">
                   <div class="alert alert-success z-depth-1">
                      <h4><span id="mBinFill"><?php echo $fillLevel; ?> %</span><br /></h4>
                      <strong>Volume</strong> 
                   </div>
                   <div class="alert alert-info z-depth-1">
                      <h4><span id="mBinBatt"><?php echo $battery; ?> V</span><br /></h4>
                      <strong>Battery health</strong> 
                   </div>
                </div>
            </div>
          </div>
          <script>
  
 
</script>
<?php 
/* Open connection to "zing_db" MySQL database. */
$mysqli = new mysqli("localhost", "root", "", "mibrathe_swinbins");

 
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
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
             <div id='myChart'></div>
            </div>
          </div> 
        </div>
        </div>
    </div>                   
                
            
           
  
    <!-- All JavaScript files
    
    ================================================== -->
    <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">

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

</script>
<script src="maps2.js"type="text/javascript"></script>