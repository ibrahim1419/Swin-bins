<?php
 include_once("connection.php"); 

 $sql_table= "bin_details";
                        
    $query= "SELECT bindetails.binid,bindetails.location,bindetails.status,bindetails.bintype,bindetails.zone,((bincategory.binlength-bindata.fill)/bincategory.binlength) * 100 as gg ,bindata.date ,bindata.time
    FROM (bindetails INNER JOIN bindata ON bindetails.binid=bindata.binid)
    INNER join bincategory ON bindetails.bintype=bincategory.bintype
    WHERE CONCAT(bindata.date,' ',bindata.time) = (SELECT MAX(CONCAT(bindata.date,' ',bindata.time))  FROM bindata WHERE bindetails.binid = bindata.binid)";
        
                    
            $result = mysqli_query($connection, $query);


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

 <?php 
/* Open connection to "zing_db" MySQL database. */
$mysqli = new mysqli("localhost", "root", "", "mibrathe_swinbins");

/* Check the connection. */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    $data=mysqli_query($mysqli,"SELECT WEEKOFYEAR(date) AS weekno, AVG(bindata.fill) AS yo,SUBDATE(date, INTERVAL WEEKDAY(date) DAY) AS date_of_week, bindetails.zone FROM bindata INNER JOIN bindetails ON bindetails.binid=bindata.binid
                      GROUP BY bindetails.zone, WEEKOFYEAR(date)");?>


<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info["yo"].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($mysqli,"SELECT WEEKOFYEAR(date) AS weekno, CONCAT(AVG(bindata.fill),'%'),SUBDATE(date, INTERVAL WEEKDAY(date) DAY) AS date_of_week, bindetails.zone FROM bindata INNER JOIN bindetails ON bindetails.binid=bindata.binid
                      GROUP BY bindetails.zone, WEEKOFYEAR(date)");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['date_of_week'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>

<script>
    <?php
$donut=mysqli_query($mysqli,"SELECT * FROM efficiency");
?>
var myDataDonut=[<?php 
while($info=mysqli_fetch_array($donut))
    echo $info["data"].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$donut=mysqli_query($mysqli,"SELECT * FROM efficiency");
?>
var myLabelsDonut=[<?php 
while($info=mysqli_fetch_array($donut))
    echo '"'.$info['type'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>  

<script>
    <?php
$pie=mysqli_query($mysqli,"SELECT COUNT(*) as count FROM `collectiondata` where level >=0 AND level <=30");
?>
var myLabelsPielow=[<?php 
while($info=mysqli_fetch_array($pie))
    echo '"'.$info['count'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
    <?php
$pie1=mysqli_query($mysqli,"SELECT COUNT(*) as count1 FROM `collectiondata` where level >=31 AND level <=70");
?>
var myLabelsPiemedium=[<?php 
while($info=mysqli_fetch_array($pie1))
    echo '"'.$info['count1'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
        <?php
$pie2=mysqli_query($mysqli,"SELECT COUNT(*) as count2 FROM `collectiondata` where level >=71 AND level <=100");
?>
var myLabelsPiehigh=[<?php 
while($info=mysqli_fetch_array($pie2))
    echo '"'.$info['count2'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>


<?php
/* Close the connection */
$mysqli->close(); 
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
   <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
        <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>



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

  </div>
</div>
        <section class="testimonials-section-s2">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-header">
                    <h2>Collection Effiency</h2>
                    </div>
                <div class="container-fluid">
                        <div class="row"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-header">
                                        <h2>Total collection efficieny </h2>
                                    </div>       
                             <div id='myDonutChart'></div> 

                                    </div>
                                </div>
                            
        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-header">
                                        <h2>Fill level at collection </h2>
                                        
                                    </div>

                                    <div id='myPieChart'></div>
                                    
                              </div>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                             <div class="card">
                                    <div class="card-title">
                                        <h2>Average weekly fill </h2>
                                        
       
                            <div id='myChart'></div>
                                        
                                    </div>
                                    
                                    </div>
                             </div>

                            </div>
                            <!-- ./Messages -->
                        
                                </div>
                            </div>
                            <!-- ./row -->
                        </div>


        </section>
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

</div>

               
        <!-- end site-footer -->
   
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
        </script>

</body>
</html>
<script type="text/javascript">
window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:500,
    data:{
    "type":"line",
    "title":{
        "text":""
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});
};
    var myConfig = {
 	type: "pie", 
 	plot: {
 	  borderWidth: 5,
 	  // slice: 90,
 	  valueBox: {
 	    placement: 'out',
 	    text: '%t\n%npv%',
 	    fontFamily: "Open Sans"
 	  },
 	  tooltip:{
 	    fontSize: '18',
 	    fontFamily: "Open Sans",
 	    padding: "5 10",
 	    text: "%npv%"
 	  },
 	  animation:{
      effect: 2, 
      method: 5,
      speed: 500,
      sequence: 1
    }
 	},
 	source: {
 	  text: 'gs.statcounter.com',
 	  fontColor: "#8e99a9",
 	  fontFamily: "Open Sans"
 	},
 	title: {
 	  fontColor: "#fff",
 	  text: 'Global Browser Usage',
 	  align: "left",
 	  offsetX: 10,
 	  fontFamily: "Open Sans",
 	  fontSize: 25
 	},
 	plotarea: {
 	  margin: "20 0 0 0"  
 	},
	series : [
		{
            text: "Low",
		  backgroundColor: '#50ADF5',
			values : myLabelsPielow
			
		},
		{
		  values: myLabelsPiemedium,
		  text: "Medium",
		  backgroundColor: '#FF7965'
		},
		{
		  values: myLabelsPiehigh,
		  text: 'High',
		  backgroundColor: '#FFCB45'
		}
	]
};
 
zingchart.render({ 
	id : 'myPieChart', 
	data : myConfig, 
	height: 500, 
	width: "100%" 
});

var myConfigdonut = {
backgroundColor:'#FBFCFE',
 	type: "ring",
 	plot: {
 	  slice:'50%',
 	  borderWidth:0,
 	  backgroundColor:'#FBFCFE',
 	  animation:{
 	    effect:2,
 	    sequence:3
 	  },
 	  valueBox: [
 	    {
 	      type: 'all',
 	      text: '%t',
 	      placement: 'out'
 	    }, 
 	    {
 	      type: 'all',
 	      text: '%npv%',
 	      placement: 'in'
 	    }
 	  ]
 	},
 	plotarea: {
 	  backgroundColor: 'transparent',
 	  borderWidth: 0,
 	  borderRadius: "0 0 0 10",
 	  margin: "70 0 10 0"
 	},
 	legend : {
    toggleAction:'remove',
    backgroundColor:'#FBFCFE',
    borderWidth:0,
    adjustLayout:true,
    align:'center',
    verticalAlign:'bottom',
    marker: {
        type:'circle',
        cursor:'pointer',
        borderWidth:0,
        size:5
    },
    item: {
        fontColor: "#777",
        cursor:'pointer',
        offsetX:-6,
        fontSize:12
    },
    mediaRules:[
        {
            maxWidth:500,
            visible:false
        }
    ]
 	},
 	scaleR:{
 	  refAngle:270
 	},
	series : [
		{
		  text: "efficiency",
			values : [78.1],
			lineColor: "#00BAF2",
			backgroundColor: "#00BAF2",
			lineWidth: 1,
			marker: {
			  backgroundColor: '#00BAF2'
			}
		},
        {
		  text: "",
			values : [21.9],
			lineColor: "#FFCB45",
			backgroundColor: "#FFCB45",
			lineWidth: 1,
			marker: {
			  backgroundColor: '#FFCB45'
			}
		}
	]
};
 
zingchart.render({ 
	id : 'myDonutChart', 
  data: {
    gui:{
      contextMenu:{
        button:{
          visible: true,
          lineColor: "#2D66A4",
          backgroundColor: "#2D66A4"
        },
        gear: {
          alpha: 1,
          backgroundColor: "#2D66A4"
        },
        position: "right",
        backgroundColor:"#306EAA", /*sets background for entire contextMenu*/
        docked: true, 
        item:{
          backgroundColor:"#306EAA",
          borderColor:"#306EAA",
          borderWidth: 0,
          fontFamily: "Lato",
          color:"#fff"
        }
      
      },
    },
    graphset: [myConfigdonut]
  },
	height: '499', 
	width: '100%' 
});
</script>