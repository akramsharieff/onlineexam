<?php 
	/*include('database.php'); 
	$sub=mysqli_query($cn,"SELECT * FROM `mst_subject`");	*/
?>
<!DOCTYPE html>
<html>
<head>
<link href="logo.png" rel="icon" type="image/png/gif" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="shortcut icon" href="image/favicon.ico">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />		
<link rel="stylesheet" type="text/css" href="css/demo.css" />		
<link rel="stylesheet" type="text/css" href="css/set1.css" />		
<!-- js -->
<script type='text/javascript' src='js/jquery.min.js'></script>

<!-- //js -->

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
</head>
<body >
<div  style="background-color:#2d3e50; ">
	<div class="col-xs-2 col-md-offset-0 logo"><img class="heading hidden-xs hidden-sm" src="image/logo1.PNG" alt="logo" height="90px" width="120"/><img class="heading hidden-lg hidden-md" src="image/logo1.PNG" alt="logo" height="50px" width="70"/></div></div>
	<div class="col-xs-6 container col-md-offset-3 title"><h1 style="font-size:50px;" class="heading hidden-xs hidden-sm">Online Exam</h1><h3 class="heading hidden-lg hidden-md">Online Exam</h3></div>
</div>
<div class="container-fluidh">
	<nav class="navbar navbar-default">
		 <div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a class="hvr-overline-from-center button2 active " id="padding" href="index.php">Home</a></li>
				<li><a class="hvr-overline-from-center button2 " id="padding" href="exam.php">Exam Portal</a></li>
				<li><a class="hvr-overline-from-center button2 " id="padding" href="register.php">Register</a></li>
				<li><a class="hvr-overline-from-center button2 " id="padding" href="printcard.php">Print card</a></li>
				<li><a class="hvr-overline-from-center button2 " id="padding" href="forgetoec.php">Verify OEC</a></li>
				<li class="dropdown" id="padding">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics offered<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="cf.php">Computer Fundamental</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="vb.php">VB</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="java.php">java</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="c.php">C Language</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="office.php">Ms Office</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="gk.php">General Knowledge</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="php.php">php</a></li>
							<li><a class="hvr-overline-from-center button2" style ="padding-top:10px;" href="sql.php">SQL</a></li>
				</li>
					
			</ul>
			
		</div><!-- /navbar-collapse -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {					
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	</nav>
</div>
</body>
<style>
.logo{
		padding:20px;
				width:25%;
				display:inline-block;
				 margin-left:15px;
			}
			.title{
				margin-top:20px;
				margin-left:90px;
				display:inline-block;
			}
			
.heading{		
			font-weight: bolder;
			text-decoration : none;
			color: white;
			margin-left:20px;
		}
			#padding{
				margin-left: 80px;
			}
			@media screen and (min-width: 992px){
			.nav{
				margin-left:10px;
			}
			}
</style>

	