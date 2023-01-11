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
					<p><a href="javascript:;">TIPSORA </a>- APP MODERNIZATION</p>
					<h2>APP MODERNIZATION</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="second-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="txtwrp">
					<h2 class="main-heading">Are your applications suffering from legacy technology that cannot scale?</h2>
					<p class="main-pera">We can help rearchitect and rewrite your applications with modern architecture and scalable design.</p>
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