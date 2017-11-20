<?php
 include_once("connection.php"); 

 $sql_table= "bin_details";
                        
    $query= "SELECT * FROM bindetails";
        
                    
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
<!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

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
                                    <li><a href="analysis.php"> Collection Efficiency</a></li>
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
        </header>
        <!-- end of header -->  

<div class="page-content">
<div id="mySidenav" class="sidenav">

  <a ><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Keywords</a>
  <a> Search Box : <input type="text" id="searchbox">
<br><br> </a>


</div>
         <section class="testimonials-section-s2">
            <div class="container-fluid">
                        <div class="row">
                            <!-- Data tables -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2> &nbsp;Product Management</h2>
                                    </div>
                                </div>
                        <div class="container-fluid">
        <div class ="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <button class="btn btn-success " style="float:right;"data-toggle="modal" data-target="#myModalNorm">
    Add new product
</button>
                                    <a class="btn btn-success">Add tags to selected</a> <a class="btn btn-success">Delete selected</a> </br></br>
                                        <div class="card-content">
                                        <div class="table-responsive">
                                            
                                            
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" onclick="checkAll(this)"></input></th>
                                                        <th>Serial number</th>
                                                        <th>Description</th>
                                                        <th>Product Type</th>
                                                        <th>Status</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php   while ($row = mysqli_fetch_assoc($result))
                                                           {
                                                        ?>
                                                        <td><input type="checkbox"></input></td>
                                                        <td><?php echo  $row["binid"] ?></td>
                                                        <td><?php echo  $row["location"] ?></td>
                                                        <td><?php echo  $row["bintype"] ?></td>
                                                        <td><?php echo  $row["status"]?></td>
                                                        
                                                        
                                                       </tr> <?php 
                            }       
                     ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
              
       </div>    
     </div>
         </div>               
<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                 </button>
                <h4 class="modal-title" id="myModalLabel">
                   Add new Bin
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" action="addproduct.php" method="post">
                    <div class="form-group">
                    <label for="binid">Binid</label>
                      <input name="binid" type="text" class="form-control" 
                      id="binid" placeholder="Enter binid"/>
                  </div>
                  <div class="form-group">
                    <label for="lname">Location</label>
                      <input type="text" class="form-control" name="location"
                      id="location" placeholder="Enter Location"/>
                  </div>
                  <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude" required data-validation-required-message="Please enter Latitude.">
                                <p class="help-block text-danger"></p>
                            </div>
                   <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" placeholder="Longitude" name="longitude" required data-validation-required-message="Please enter Longitude.">
                                <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                                <label for="bintype">Bin Type</label>
                                <input type="text" class="form-control" placeholder="Bin Type" name="bintype" required data-validation-required-message="Please enter Bin Type.">
                                <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                                <label for="bintype">Tags</label>
                                <input type="text" class="form-control" placeholder="Tags" name="tags" required data-validation-required-message="Please enter Tags">
                                <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                                <label for="priority">Priority</label>
                                <select name="priority">
  <option value="low">Low</option>
  <option value="medium">Medium</option>
  <option value="high">High</option>
</select>
                    </div>
                    <div class="form-group">
                                <label for="zone">Zone</label>
                                <select name="zone">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  <option value="F">F</option>
  <option value="G">G</option>
</select>
                                
                                <p class="help-block text-danger"></p>
                            </div>
                  <button type="submit" class="btn btn-primary">
                    submit
                </button>
                </form>                             
            </div>
            
            <!-- Modal Footer -->
          
        </div>
    </div>
</div>
</div>
</div>
        </section>


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
    <script src="assets/js/script.js"></script>
            <script>
            function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
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
