<?php
 include_once("connection.php"); 
?>

        <?php 
        /* Include the `fusioncharts.php` file that contains functions  to embed the charts. */
   include("assets/fusioncharts.php");
/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */
   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "";  // MySQL password
   $namedb = "mibrathe_swinbins";  // MySQL database name
   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
   /*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
   if ($dbhandle->connect_error) {
    exit("There was an error with your connection: ".$dbhandle->connect_error);
   }

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
    
  
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="assets/js/fusioncharts.js"> </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
         <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDR0GuQYKHGTmW1od33386_4VEutp-odc&callback=initialize"></script>
        <script src="maps2.js"type="text/javascript"></script>
  <script>

  </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

    <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
     
    <!-- Modal content-->
      <div class="modal-content">
     <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="mBinID">Modal Header</h4>
    </div>
         <div class="modal-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card">
                <div class="card-content">
                 <strong>GPS</strong></br>  <span id="mBinName"></span><br /> </br>
                 <strong>Last Updated</strong></br> <span id="mBinUp"></span><br /><br />
                 <strong>Tags</strong></br> <span id="mBinUp">Hospitals, clinics</span><br /><br /><br />
                </div>
            </div>        

          </div> 
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
            <div class="card">
                <div class="card-content">
                   <div class="alert alert-success z-depth-1">
                      <h4><span id="mBinFill"></span><br /></h4>
                      <strong>Volume</strong> 
                   </div>
                   <div class="alert alert-info z-depth-1">
                      <h4><span id="mBinBatt"></span><br /></h4>
                      <strong>Battery health</strong> 
                   </div>
                </div>
            </div>
          </div>
          <?php
        
        $id=$_GET['id']; 

            
        $query= "Select binid,date,fill FROM bindata Where binid='$id'";
        
        $result = $connection->query($query) or exit("Error code ({$connection->errno}): {$connection->error}");
        
        // If the query returns a valid response, prepare the JSON string
      if ($result) {
          // The `$arrData` array holds the chart attributes and data
          $arrData = array(
              "chart" => array(
                  "caption" => "daily fill level",
                  "showValues" => "0",
                  "theme" => "zune"
                )
            );
            
            $arrData["data"] = array();
            
            while($row = mysqli_fetch_array($result)) {
            array_push($arrData["data"], array(
                "label" => $row["date"],
                "value" => $row["fill"]
                )
            );
          }
            
            $jsonEncodedData = json_encode($arrData);
            $columnChart = new FusionCharts("area2d", $id , 550, 250, "chart-1", "json", $jsonEncodedData);
            $columnChart->render();
            $columnChart->dispose($id);
            $connection->close();
      
      }   
        ?>
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
             <div id="chart-1"><!-- Fusion Charts will render here--></div> 
            </div>
          </div> 
        </div>
        </div>

        <div class="modal-footer">
           
        </div>
    </div>

  </div>
</div>
                           
                
            </div>
           
        </section>   
        <!-- end about-us-section-s3 -->



        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->
</div>

    <!-- All JavaScript files
    
    ================================================== -->
    <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>
