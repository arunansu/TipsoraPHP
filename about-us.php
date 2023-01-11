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
<body class="hompg">

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
					<p><a href="javascript:;">TIPSORA </a>- ABOUT US</p>
					<h2>ABOUT US</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="txtwrp">
					<h2 class="main-heading">About Tipsora</h2>
					<p class="main-pera">Tipsora is a global consulting firm, providing technology consulting, training and recruiting services to organizations. We serve all industries including, Banking, Insurance, Capital Markets, Healthcare, Pharmacy, Manufacturing, Retail, Tourism etc.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="service-sec">
	<div class="container">
		<div class="col-md-12">
			<div class="heading">
				<h2 class="main-heading">OUR SERVICES</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="main-box">
					<div class="iconwrp">
						<i class="fa-regular fa-comments"></i>
						<span>01</span>
					</div>
					<div class="txtwrp">
						<h3>CONSULTING</h3>
						<p>Our experts are certified Microsoft Azure, Databricks and other Big Data and Machine Learning products.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-box">
					<div class="iconwrp">
						<i class="fa-solid fa-handshake"></i>
						<span>02</span>
					</div>
					<div class="txtwrp">
						<h3>TRAINING</h3>
						<p>With hands on training and project-based learning, we can train your people with the right skillset in right time.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-box">
					<div class="iconwrp">
						<i class="fa-solid fa-place-of-worship"></i>
						<span>03</span>
					</div>
					<div class="txtwrp">
						<h3>RECRUITING</h3>
						<p>Our technical experts can find, screen and prepare candidates to join your team.</p>
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