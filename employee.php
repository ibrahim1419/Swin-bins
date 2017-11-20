<?php
 include_once("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
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
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/fusioncharts.js"> </script>



    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                                    <li><a href="clog.php">Collection log</a></li>
                                    <li><a href="analysis.php">Analysis</a></li>
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

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"><i class="fa fa-bell" aria-hidden="true"> Notification</i></a>
                            </li>

                        </ul>
                    </div><!-- end of nav-collapse -->
                    
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->  

<div class="page-content">
<div id="mySidenav" class="sidenav">

  <a ><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search</a>
  <a href="#">  <div class="btn-group">
    <button type="button" >30 days</button>
    <button type="button" >60 days</button>
    <button type="button" >90 days</button>
    <button type="button" > Year</button>
  </div></a>
  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> From</br>
    <input type="date"></input>
  </a>
  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> To</br>
    <input type="date"></input>
  </a>
  <a><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> Priority</a> 
  <a> <h4> Low </h4> </a>
  <a> <h4> Medium</h4> </a> 
  <a> <h4> High</h4> </a>
 <a> <i class="fa fa-filter" aria-hidden="true"></i> Filtered List </a>
 <a> <table class="filter">
    <tr> <td> All <td> <td> <input type="checkbox"> </input> </td> </tr>
    <tr> <?php 
        $query1= "SELECT bindetails.binid,bindetails.location,bindetails.status,bindetails.bintype,bindetails.zone,((bincategory.binlength-bindata.fill)/bincategory.binlength) * 100 as gg ,bindata.date ,bindata.time
    FROM (bindetails INNER JOIN bindata ON bindetails.binid=bindata.binid)
    INNER join bincategory ON bindetails.bintype=bincategory.bintype
    WHERE CONCAT(bindata.date,' ',bindata.time) = (SELECT MAX(CONCAT(bindata.date,' ',bindata.time))  FROM bindata WHERE bindetails.binid = bindata.binid)";
                   
    $result1 = mysqli_query($connection, $query1);
      while ($row1 = mysqli_fetch_assoc($result1))
        { ?> <td> <?php echo $row1["binid"]; ?> </td> <td> <input type="checkbox"> </input> </tr> <?php } ?> 
</table>
  </div></a>
</div>
        <section class="testimonials-section-s2">
            <div class="container-fluid">
                        <div class="row">
                            <!-- Data tables -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Collection Effiency</h2>
                                    </div>
                                                        <div class="container-fluid">
                        <div class="row">
                            <!-- Google Map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-header">
                                        <h2>Total collection efficieny </h2>
                                    </div>
                                    <?php
        
       
            
        $query1= "SELECT * FROM efficiency";

        
        $result1 = $connection->query($query1) or exit("Error code ({$connection->errno}): {$connection->error}");
        
        // If the query returns a valid response, prepare the JSON string
        if ($result1) {
            // The `$arrData` array holds the chart attributes and data
            $arrData1 = array(
                "chart" => array(
                  "caption" => "Graph fill status",
                  "showValues" => "1",
                  "theme" => "fint"
                )
            );
          
            
            $arrData1["data"] = array();
            
            while($row = mysqli_fetch_array($result1)) {
            array_push($arrData1["data"], array(
                "label" => $row["type"],
                "value" => $row["data"],
                             
                

                )
            );
            }
            
            $jsonEncodedData = json_encode($arrData1);
            $pieChart = new FusionCharts("doughnut2d", "yo" , 500, 350, "chart-2", "json", $jsonEncodedData);
            $pieChart->render();
            
            
        }   
        ?>
                             <div id="chart-2"><!-- Fusion Charts will render here--></div> 

                                    </div>
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-header">
                                        <h2>Fill level at collection </h2>
                                    </div>
                                    <?php     
        $query= "SELECT level,count FROM collection WHERE 1";

        
        $result = $connection->query($query) or exit("Error code ({$connection->errno}): {$connection->error}");
        
        // If the query returns a valid response, prepare the JSON string
        if ($result) {
            // The `$arrData` array holds the chart attributes and data
            $arrData = array(
                "chart" => array(
                  "caption" => "Fill level at collection",
                  "showValues" => "1",
                  "theme" => "zune"
                )
            );
            
            $arrData["data"] = array();
            
            while($row = mysqli_fetch_array($result)) {
            array_push($arrData["data"], array(
                "label" => $row["level"],
                "value" => $row["count"],
                             
                

                )
            );
            }
            
            $jsonEncodedData = json_encode($arrData);
            $columnChart = new FusionCharts("pie2d", "myFirstChart", 500, 350, "chart-1", "json", $jsonEncodedData);
            $columnChart->render();
            
            
            
        }   
        ?>
                                    <div id="chart-1"><!-- Fusion Charts will render here--></div> 
                                    
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-header">
                                        <h2>Average weekly fill </h2>
                                        <?php
        
        
            
        $query2= "SELECT WEEKOFYEAR(date) AS weekno, CONCAT(AVG(bin_data.fill),'%'),SUBDATE(date, INTERVAL WEEKDAY(date) DAY) AS date_of_week, bin_details.zone FROM bin_data INNER JOIN bin_details ON bin_details.binid=bin_data.binid
                      GROUP BY bin_details.zone, WEEKOFYEAR(date)";

        
        $result2 = $connection->query($query2) or exit("Error code ({$connection->errno}): {$connection->error}");
        
        // If the query returns a valid response, prepare the JSON string
        if ($result2) {
            // The `$arrData` array holds the chart attributes and data
            $arrData2 = array(
                "chart" => array(
                  "caption" => "Average weekly fill",
                  "showValues" => "0",
                  "theme" => "fint"
                )
            );
          
            
            $arrData2["data"] = array();
            
            while($row2 = mysqli_fetch_array($result2)) {
            array_push($arrData2["data"], array(
                
                "label" => $row2["date_of_week"],
                "value" => $row2["CONCAT(AVG(bin_data.fill),'%')"],
                             
                

                )
            );
            }
            
            $jsonEncodedData = json_encode($arrData2);
            $columnChart2 = new FusionCharts("area2d", "", 1000, 350, "chart-3", "json", $jsonEncodedData);
            $columnChart2->render();
            $connection->close();
            
        }   
        ?> <div id="chart-3"><!-- Fusion Charts will render here--></div> 
                                        
                                    </div>
                                    
                                    </div>
                             </div>

                            </div>
                            <!-- ./Messages -->
                        </div>
                                </div>
                            </div>
                            <!-- ./row -->
                        </div>


        </section>
</div>
</div>

        <!-- end about-us-section-s3 -->
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


    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/datatables/dataTables.min.js" type="text/javascript"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->

</body>
</html>
