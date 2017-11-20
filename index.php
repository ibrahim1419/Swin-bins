<?php
 include_once("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title> Swin-Bins </title>

    <!-- Favicon and Touch Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
        <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
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
        <!-- end of header -->

        <!-- start about-us-section-s3 -->
        <section class="contact-map-section">
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
                                <td > All</td>
                                <td> <input id="" type="checkbox" checked="checked"  onclick="showbins()"/> </td>
                            </tr>
                            <tr>
                                <td  > Bins</td>
                                <td> <input id="" class="removeable" type="checkbox" onclick="hidedrivers()"/> </td>
                            </tr>
                            <tr>
                                <td > Drivers  </td>
                                <td > <input id="" class="removeable" type="checkbox" onclick="hidebins()"/> </td>
                            </tr>
                            <tr>
                                <td > <i class="fa fa-caret-square-o-up" aria-hidden="true"></i> Priority </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> Low</td>
                                <td> <input id="low" class="removeable" type="checkbox" onchange="filterMarkers2(this.id)"/> </td>
                            </tr>
                            <tr>
                                <td> Medium</td>
                                <td> <input id="Medium" type="checkbox" class="removeable" onchange="filterMarkers2(this.id)"/> </td>
                            </tr>
                            <tr>
                                <td> High  </td>
                                <td > <input id="High" type="checkbox" class="removeable" onchange="filterMarkers2(this.id)"/> </td>
                            </tr>
                           <tr>
                                <td > <i class="fa fa-shield" aria-hidden="true"></i> &nbsp; <strong> Property </strong> </td>
                                <td > </td>
                            </tr>
                            <tr>
                                <td > Private </td>
                                <td> <input id="private" class="removeable" type="checkbox" onchange="filterMarkers1(this.id)"/>  </td>
                            </tr>
                            <tr>
                                <td> Government  </td>
                                 <td> <input id="public" class="removeable" type="checkbox" onchange="filterMarkers1(this.id)"/>  </td> 
                            </tr>
                            <tr>
                                <td > <i class="fa fa-shield" aria-hidden="true"></i> &nbsp; <strong> Battery </strong> </td>
                                <td > </td>
                            </tr>
                            <tr>
                                <td onclick="battery()"> needs attention </td>
                                <td> <input id="private" class="removeable" type="checkbox" onchange="filterMarkers1(this.id)">  </td>
                            </tr>
                        </table>
                      
                    </div>
               
                </div>
                    

    <div id="map_canvas"></div>
        <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-md">
     
    <!-- Modal content-->
         <div class="modal-content">
     
              </div>

         </div>
</div>

    
                           
                
            </div>
           
        </section>   
        <!-- start site-footer -->
        <section class="site-footer">
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2017. All right plantation</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end container -->
            </div> <!-- end copyright-area -->
        </section>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->


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