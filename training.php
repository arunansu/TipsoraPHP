<!doctype html>
<html lang="en">
<head>
<title>Home Page</title>
<meta name="keywords" content="">
<meta name="description" content="">



<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>




<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>



</head>
<body class="hompg consult-page">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>

<section class="app-banner">
	<div class="page-header-shape-1"></div>
	<div class="page-header-shape-2"></div>
	<div class="page-header-shape-3"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="txtwrp">
					<p><a href="javascript:;">TIPSORA </a>- TRAINING</p>
					<h2>TRAINING</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="experience-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imgwrp">
					<img src="assets/images/get-in-touch-v1-img1.jpg">
					<a href="javascript:;">
					<i class="fa fa-play" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="txtwrp">
					<h3 class="sub-heading">WE HAVE 10+ YEAR EXPEIRENCE</h3>
					<h2>YOU’RE LOOKING FOR TRAINING</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="txtbox">
						<div class="txtwrp">
							<h2>TRAINING CUSTOMIZED TO YOUR BUSINESS NEED</h2>
							<p class="main-pera">Need to upgrade your technology but don’t have the skills? We can upskill your employees with the right training at the right time. All our training can be delivered in person or remote.</p>
						</div>
						</div>

					</div>
					<div class="col-md-6">
						<div class="txtbox">
						<div class="txtwrp">
							<h2>PROJECT BASED TRAINING</h2>
							<p class="main-pera">Working on upgrading your infrastructure or rewriting applications using latest technology? We will understand your project requirement and train your people on what they need to learn to accomplish the tasks the need to perform.</p>
						</div>
						</div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="txtbox">
						<div class="txtwrp">
							<h2>PRODUCT BROWN BAG SESSIONS</h2>
							<p class="main-pera">Working on a new product or technology that you don’t have experience in? Our product brown bag session can give you just enough information to feel comfortable getting started with development.</p>
						</div>
						</div>

					</div>
					<div class="col-md-6">
						<div class="txtbox">
						<div class="txtwrp">
							<h2>WORKSHOP</h2>
							<p class="main-pera">Need to get hands on experience on a new product or technology using mock projects. Our workshops simulate real world scenarios, so you get the experience you need to start your project.</p>
						</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>




</body>
</html>