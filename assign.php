<?php
 include_once("connection.php"); 
 $yid=$_GET['id'];
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

  <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

  </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
                <style>
ul {
    padding:0px;
    margin: 0px;
}
#response {
    padding:10px;
    background-color:#9F9;
    border:2px solid #396;
    margin-bottom:20px;
}
#list li {
    margin: 0 0 3px;
    padding:8px;
    background-color:#a3a1a1;
    color:#fff;
    list-style: none;
} 
</style>
<script type="text/javascript">
$(function() {
var order = $( "#bins, #employees" ).sortable({
    connectWith: ".connectMe" 
}); 
});

</script>

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

  <a > &nbsp; Selected User</a>
  
  <a><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> emp<?php echo $yid; ?></a> 
  
</div>
        <section class="testimonials-section-s2">
            <div class="container-fluid">
                        <div class="row">
                            <!-- Data tables -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2> &nbsp;Assign Bins</h2>
                                    </div>
                                </div>
                        <div class="container-fluid">
        <div class ="row">
            <div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">          
            <div id="list">
                <h2> All bins </h2>
            <ul id="bins" class="connectMe">
         <?php
                include_once("connection.php");
                $query  = "SELECT * FROM bindetails WHERE empid<>'$yid' ORDER BY binid ASC ";
                $result = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_array($result))
                {
                    
                $id = stripslashes($row['binid']);
                $text = stripslashes($row['location']);
                    
                ?>
            <li id="arrayorder_<?php echo $id; ?>">  <?php echo $id; ?> </br>  <?php echo $text; ?> 
            <div class="clear"></div>
            </li>
             <?php } ?>
             </ul>
             </div>  
        </div>
          <div class="col-lg-5 col-md-3 col-sm-3 col-xs-3" style="float:right;">          
            <div id="list">
                <h2> Assigned bins </h2>
            <ul id="employees" class="connectMe">
         <?php
                
                include_once("connection.php");
                $query1  = "SELECT * FROM bindetails WHERE empid='$yid' group by empid";
                $result1 = mysqli_query($connection, $query1);
                

                while($row1= mysqli_fetch_array($result1))
                {
                    
                $empid = stripslashes($row1['binid']);
                $text1 = stripslashes($row1['location']);
                    
                ?>
            <li id="arrayorder_<?php echo $empid; ?>"> <?php echo $empid; ?> </br> <?php echo $text1; ?>
            <div class="clear"></div>
            </li>
             <?php } ?>
             </ul>
             
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

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/datatables/dataTables.min.js" type="text/javascript"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->

</body>
</html>
<script>
   $(function() {
   $( "#bins,#employees" ).sortable({
    connectWith: ".connectMe" 
   });
});
   function saveDisplayChanges()
{
  var order =  $("ul#bins,ul#employees").sortable("serialize");
  var a = "hello";
  var b = "hi";
  $.post("update_displayorder.php?"+order+"&a=hello"+"&b=developer",{abc:a,xyz:b},function(theResponse){
  $("#categorysavemessage").html(theResponse);

});
}

</script>

