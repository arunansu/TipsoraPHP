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
					<p><a href="javascript:;">TIPSORA </a> - CONTACT</p>
					<h2>CONTACT</h2>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="contact-sec">
	
	<div class="container">
		<div class="bck-col">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-box">
					<div class="iconwrp">
						<a href="javascript:;">
							<i class="fa-solid fa-phone"></i>
						</a>
					</div>
					<div class="txtwrp">
						<h3>CONTACT</h3>
						<a href="mailto:info@tipsora.com">info@tipsora.com</a>
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