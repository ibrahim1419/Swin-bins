<?php
	include_once("connection.php"); 
	session_start();
	if(isset($_SESSION['user']) && $_SESSION['user']=="admin"){
	  header('Location: index.php');
	}

	if(isset($_SESSION['redirect']) && $_SESSION['redirect']==true) {
		$_SESSION['location']= htmlspecialchars($_GET['location']);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Swin-Bins </title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/img/ico/favicon.png">
    <!-- Start Global Mandatory Style
         =====================================================================-->
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
    <!-- Material Icons CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Animation Css -->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
    <!-- materialize css -->
    <link href="assets/css/materialize.min.css" rel="stylesheet">
    <!-- custom CSS -->
    <link href="assets/css/stylematerial.css" rel="stylesheet">
</head>

<body class="sign-section">
    <div class="container sign-cont animated zoomIn">
        <div class="row sign-row">
            <div class="sign-title">
                <h2 class="teal-text"><i class="fa fa-user-circle-o"></i></h2>
                <h2 class="teal-text">Login</h2>
            </div>
            <form class="col s12" id="login-form" action="login_check.php" method="POST">
                <div class="row sign-row">
                    <div class="input-field col m12">
						<placeholder for="login_username">User Name:</placeholder>
                        <input id="login_username" type="text" required name="login_username" class="validate" required>
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s12">
						<placeholder for="login_password">Password:</placeholder>
                        <input id="login_password" type="password" required name="login_password" class="validate" required>
                       
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s12 m-b-30">
                        <label class="pull-left"><a class='pink-text' href='#!'><b>Forgot Password?</b></a></label>
                    </div>
                </div>
                <div class="row sign-row">
                    <div class="input-field col s6">
                        <div class="sign-confirm">
                            <input type="checkbox" id="sign-confirm" />
                            <label for="sign-confirm">Remember me!</label>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <button class="btn btn-large btn-register waves-effect waves-light green" type="submit" name="action">Login
                            <i class="material-icons right">done_all</i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <a title="Login" class="sign-btn btn-floating btn-large waves-effect waves-light green">
            <i class="material-icons">perm_identity</i></a>
    </div>

    <!-- Start Core Plugins
         =====================================================================-->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- materialize  -->
    <script src="assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
    <!-- End Core Plugins
         =====================================================================-->
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
</body>

</html>