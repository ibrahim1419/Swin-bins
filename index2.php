<!DOCTYPE html>

<html>

<head>

 <title>Notification using PHP Ajax Bootstrap</title>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->

        <!-- end preloader -->


        <!-- Start header -->
        <header class="site-header header-style-3 sticky-s1">

            <!-- start topbar -->
            <div class="topbar">
                <div class="upper-topbar">
                    <div class="container">
                        <div class="row">


                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end upper-topbar -->
            </div>
            <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="#"><img src="assets/images/logo.png" height="35"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children current-menu-ancestor">
                                <a href="index.php">Overview</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Data</a>
                                <ul class="sub-menu">
                                     <li><a href="clog.php">Collection Efficiency</a></li>
                                    <li><a href="clog.php">Collection log</a></li>
                                    <li><a href="analysis.php"> Analysis</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">User Management</a>
                                <ul class="sub-menu">
                                    <li><a href="users.php">View users</a></li>
                                    <li><a href="adduser.php">Add new user</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Product Management</a>
                                <ul class="sub-menu">
                                    <li><a href="products.php">View products</a></li>
                                    <li><a href="addproducts.php">Add new product</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification &nbsp; <span class="label label-pill label-danger count" style="border-radius:10px;"></a>
          <ul class="dropdown-menu notify-drop">
            <!-- end notify title -->
            <!-- notify content -->
            <p> hi </p>
            <div class="sub-menu">
            </div>
          </ul>
        </li>
      </ul>
                    </div><!-- end of nav-collapse -->
                    
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

        <!-- start about-us-section-s3 -->
        <section class="contact-map-section">
            <h2 class="hidden">Contact Map Location</h2>
            <div class="contact-map-holder">
                <div id="floating-panel">
                    <div class="header">  <h4 style="color=white;"> Filter dashboard </h4> </div>
                   
                    <div class="bady"> 
                        <h5 align="center;"> &nbsp; &nbsp; &nbsp; <i class="fa fa-tags" aria-hidden="true"></i> &nbsp;Tags </h5>
                        
                        <table class ="tablebady">
                            <tr>
                                <td>  Zone </td>
                                <td> <select id="type" onchange="filterMarkers(this.value);">
                                     <option value=""> All </option>
                                     <option value="A">A</option>
                                     <option value="B">B</option>
                                     <option value="C">C</option>
                                     <option value="D">D</option>
                                     <option value="E">E</option>
                                     <option value="F">F</option>
                                     <option value="G">G</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td > <i class="fa fa-shield" aria-hidden="true"></i> &nbsp; <strong> Type </strong> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td  onclick="showbins()"> All</td>
                                <td>  </td>
                            </tr>
                            <tr>
                                <td  onclick="hidedrivers()"> Bins</td>
                                <td>  </td>
                            </tr>
                            <tr>
                                <td onclick="hidebins()"> Drivers  </td>
                                <td > </td>
                            </tr>
                            <tr>
                                <td > <i class="fa fa-shield" aria-hidden="true"></i> &nbsp; <strong> Property </strong> </td>
                                <td > </td>
                            </tr>
                            <tr>
                                <td > Private </span></td>
                                <td> <input id="private" type="checkbox" onchange="filterMarkers1(this.id)"/>  </td>
                            </tr>
                            <tr>
                                <td> Government  </td>
                                 <td> <input id="public" type="checkbox" onchange="filterMarkers1(this.id)"/>  </td> 
                            </tr>
                            <tr>
                                <td > <i class="fa fa-shield" aria-hidden="true"></i> &nbsp; <strong> Battery </strong> </td>
                                <td > </td>
                            </tr>
                            <tr>
                                <td onclick="battery()"> needs attention </span></td>
                                <td> <input id="private" type="checkbox" onchange="filterMarkers1(this.id)"/>  </td>
                            </tr>
                        </table>
                      
                    </div>
               
                </div>

    <div id="map_canvas"></div>
    <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
     
    <!-- Modal content-->
      <div class="modal-content">
     <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"  id="mBinID">Modal Header</h4>
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
          <script>
  
 
</script>
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
            <section class="cta-s3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        
                    </div>
                    <div class="col col-lg-4 right-col">
                        <ul>
                           
                        </ul>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <!-- start site-footer -->
        <section class="site-footer">
                        <div class="topbar">
                <div class="upper-topbar">
                    <div class="container">
                        <div class="row">
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end upper-topbar -->
            </div>
        </section>
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
<script>
 
$(document).ready(function(){
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown-menu').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 
// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count').html('');
 
 load_unseen_notification('yes');
 
});
 
setInterval(function(){
 
 load_unseen_notification();;
 
}, 5000);
 
});
 
</script>
</head>

<body>

 <br /><br />

 <div class="container">

  <nav class="navbar navbar-inverse">

   <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children current-menu-ancestor">
                                <a href="index.php">Overview</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Data</a>
                                <ul class="sub-menu">
                                     <li><a href="clog.php">Collection Efficiency</a></li>
                                    <li><a href="clog.php">Collection log</a></li>
                                    <li><a href="analysis.php"> Analysis</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">User Management</a>
                                <ul class="sub-menu">
                                    <li><a href="users.php">View users</a></li>
                                    <li><a href="adduser.php">Add new user</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Product Management</a>
                                <ul class="sub-menu">
                                    <li><a href="products.php">View products</a></li>
                                    <li><a href="addproducts.php">Add new product</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
                                <ul class="sub-menu">
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification (<b>2</b>)</a>
          <ul class="dropdown-menu notify-drop">
            <!-- end notify title -->
            <!-- notify content -->
            <div class="sub-menu">
            </div>
          </ul>
        </li>
      </ul>
                    </div>

  </nav>

  <br />

  <form method="post" id="comment_form">

   <div class="form-group">

    <label>Enter Subject</label>

    <input type="text" name="subject" id="subject" class="form-control">

   </div>

   <div class="form-group">

    <label>Enter Comment</label>

    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>

   </div>

   <div class="form-group">

    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />

   </div>

  </form>


 </div>

</body>

</html>