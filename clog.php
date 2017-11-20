<?php
 include_once("connection.php"); 

 $sql_table= "bindetails";
                        
    $query= "SELECT bindetails.binid,bindetails.location,bindetails.status,bindetails.bintype,bindetails.zone,bindetails.Priority,collectiondata.collectiondate,collectiondata.level,collectiondata.count
   FROM (bindetails JOIN collectiondata ON bindetails.binid=collectiondata.binid)";
        
                    
            $result = mysqli_query($connection, $query);


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



    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    

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
                                    <li><a href="analysis.php">Lawn &amp; Analysis</a></li>
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
  <a > </a>
  <a> Keywords <input type="text" id="searchbox">
<br><br> </a>
  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> From</br>
    <input type="date"></input>
  </a>
  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> To</br>
    <input type="date"></input>
  </a>
  
 <a> <i class="fa fa-filter" aria-hidden="true"></i> Filtered List </a>
 <a> <table class="filter">
    <tr> <td> All <td> <td> <input id="Myinput" type="checkbox"> </input> </td> </tr>
    <tr> <?php 
        $query1= "SELECT bindetails.binid,bindetails.location,bindetails.status,bindetails.bintype,bindetails.zone,bindetails.Priority,collectiondata.collectiondate,collectiondata.level,collectiondata.count
   FROM (bindetails JOIN collectiondata ON bindetails.binid=collectiondata.binid) Group by collectiondata.binid";
                   
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
                                        <h2>Collection log</h2>
                                    </div>
                                
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            
                                            <a class="btn btn-success" style="float: right;">Export to excel</a> </br></br>
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Bin ID</th>
                                                        <th>Bin Location</th>
                                                        <th>Zone</th>
                                                        <th>Priority</th>
                                                        <th>Level</th>
                                                        <th>Last collection</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php   while ($row = mysqli_fetch_assoc($result))
                                                           {
                                                        ?>
                                                        <td><?php echo  $row["binid"] ?></td>
                                                        <td><?php echo  $row["location"] ?></td>
                                                        <td><?php echo  $row["zone"] ?></td>
                                                        <td><?php echo  $row["Priority"] ?></td>
                                                        <td><?php echo  $row["level"]?></td>
                                                        <td><?php echo  $row["collectiondate"] ?></td>
                                                        
                                                       </tr> <?php 
                            }       
                     ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./row -->
                        </div>

</div>
        </section>

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
    <script src="assets/js/script.js"></script>
            <script>
            "use strict";
            //stylish data table
            // Start of jquery datatable
            $('#dataTableExample1').DataTable({
                "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                "lengthMenu": [
                    [6, 25, 50, -1],
                    [6, 25, 50, "All"]
                ],
                "iDisplayLength": 6
            });
            $(document).ready(function() {
    var dataTable = $('#dataTableExample1').dataTable();
    $("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
});

        </script>

</body>
</html>
