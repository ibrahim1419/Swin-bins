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

#list li {
    margin: 0 0 3px;
    padding:8px;
    background-color:#eee9e9;
    color:#000000;
    border:2px solid #656363;
    border-radius: 15px;
    list-style: none;
}
.modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
 </style>


</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
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
                                    <li><a href="analysis.php"> Collection Efficiency</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">User Management</a>
                                <ul class="sub-menu">
                                    <li><a href="users.php">View users</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Product Management</a>
                                <ul class="sub-menu">
                                    <li><a href="products.php">View products</a></li>
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

<div class="page-content">
<div id="mySidenav" class="sidenav">

  <a ><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search</a>
    <a> Keywords <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for name">
<br><br> </a>
  
</div>
        <section class="testimonials-section-s2">
            <div class="container-fluid">
                        <div class="row">
                            <!-- Data tables -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2> &nbsp;User Management</h2>
                                    </div>
                                
                               <button class="btn btn-success " data-toggle="modal" data-target="#myModalNorm">
    Add new user
</button><br> <br>
                                                             
        <div class="container-fluid">
        <div class ="row">
            <div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">          
            <div id="list">
                           <ul id="myUL1">
         <?php
                include_once("connection.php");
                $query  = "SELECT * FROM employees";
                $result = mysqli_query($connection, $query);
                
                while($row = mysqli_fetch_array($result))
                {
                    
                $id = $row['empid'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                                    
                ?>
            <li>
                <table class="list">
                    
                    <td class="icon"><i class="fa fa-user fa-4x" aria-hidden="true"></i></td>
                        <td> <a href="#"><?php echo $firstname; ?>&nbsp; <?php echo $lastname;?> <br><?php ?>emp<?php echo $id; ?></a></td>
                </table>
                <p style="float:right;"><a href="assign.php?id=<?php echo $id ?>"><p> Assign </p></a>
            </li>
                
            <?php } ?>
             </ul> 
             </div>  
        </div>      
      </div>    
     </div>
                </div>
                            </div></div></div>        


    </section>
        
<!-- Button trigger modal -->



</div>
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
                   Add new user
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" action="adduser.php" method="post">
                    <div class="form-group">
                    <label for="fname">First Name</label>
                      <input name="fname" type="text" class="form-control" 
                      id="fname" placeholder="Enter First Name"/>
                  </div>
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                      <input type="text" class="form-control" name="lname"
                      id="lname" placeholder="Enter Last Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email"
                      id="email" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="Phone number">Phone number</label>
                      <input type="phone" class="form-control" name="phone"
                          id="phone" placeholder="Phone Number"/>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    submit
                </button>
                </form>                             
            </div>
            </div>
        </div>
    </div>

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
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL1");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
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
