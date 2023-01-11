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

<section class="recruit-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="main-box">
					<div class="imgwrp">
						<img src="assets/images/services-v3-img1.jpg">
					</div>
					<div class="txtwrp">
						<h3>AI driven <br> Automation</h3>
						<p>We make extensive use of AI to automate business processes.</p>
					</div>
					<div class="iconwrp">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-box">
					<div class="imgwrp">
						<img src="assets/images/services-v3-img2.jpg">
					</div>
					<div class="txtwrp list-scroll">
						<h3>Shared IP mode<br> of engagement</h3>
						<p>We are continuously improving our IP using the experience we gain from engagements, which creates a feed back loop to continuously improve your technical solutions and business processes.</p>
					</div>
					<div class="iconwrp">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-box">
					<div class="imgwrp">
						<img src="assets/images/services-v3-img3.jpg">
					</div>
					<div class="txtwrp list-scroll">
						<h3>Freemium and pay as<br>  you go billing model <br></h3>
						<p>Unlike big consulting firms we work on granular billing model, so you pay for exactly what you need and when you need. Our first consultation and solution proposal is always free.</p>
					</div>
					<div class="iconwrp">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="main-box">
					<div class="imgwrp">
						<img src="assets/images/services-v3-img3.jpg">
					</div>
					<div class="txtwrp list-scroll">
						<h3>Lifetime Automation</h3>
						<p>Even after solution delivery, you are not on your own. We provide varying degree of support on everything we deliver, so you are never on your own.</p>
					</div>
					<div class="iconwrp">
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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