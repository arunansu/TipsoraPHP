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
					<p><a href="javascript:;">TIPSORA </a>- FAQS</p>
					<h2>FAQS</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="faq">
  <div class="container">
    <div class="row">
    	<div class="col-md-12 text-center">
    		<div class="faq-hed">
    			<h2 class="main-heading">Faq's</h2>
    		</div>
    	</div>
      <div class="col-lg-6 fqas">
         <div class="accordwrap">
                  <div class="accordion">
                    <div class="quest-section"> <a class="quest-title" href="#accordion-1">WE HELP TO CREATE VISUAL STRATEGIES</a>
                      <div id="accordion-1" class="quest-content">
                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
                    <div class="quest-section"> <a class="quest-title" href="#accordion-2">DIGITAL AND SOCIAL MARKEITNG EXPENSES</a>
                      <div id="accordion-2" class="quest-content">
                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
                    <div class="quest-section"> <a class="quest-title" href="#accordion-3">HELP TO ACHIEVE MARKETING GOALS</a>
                      <div id="accordion-3" class="quest-content">
                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
                    <!--  <div class="quest-section"> <a class="quest-title" href="#accordion-4">What is Lorem Ipsum?</a>
                      <div id="accordion-4" class="quest-content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div> -->
                    
                  
                     
                  </div>
                </div>
      </div>
      <div class="col-md-6 fqas">
         <div class="accordwrap">
 <div class="accordion">
									 <div class="quest-section"> <a class="quest-title" href="#accordion-5">
AT THE END OF THE DAY, GOING FORWARD
</a>
                      <div id="accordion-5" class="quest-content">
                       <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
                     <div class="quest-section"> <a class="quest-title" href="#accordion-6">USER GENERATED CONTENT IN REAL-TIME</a>
                      <div id="accordion-6" class="quest-content">
                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
                     <div class="quest-section"> <a class="quest-title" href="#accordion-7">CAPITALIZE ON LOW HANGING FRUIT TO
</a>
                      <div id="accordion-7" class="quest-content">
                        <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                      </div>
                    </div>
</div>
</div>
</div> 
    </div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="txtwrp">
    			<p>QUTIIZ SERVICES BUILT SPECIFICALLY FOR YOUR <a href="contact.php">FIND YOUR SOLUTION</a></p>
    		</div>
    	</div>
    </div>
  </div>
</section>

<section class="frmwrp">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="txtwrp">
					<h3>CONTACT WITH US</h3>
				</div>
			</div>
			<div class="frmdiv">
			<form>
				<div class="frm-fields">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="Name" placeholder="Your Name">
					</div>
					<div class="col-md-6">
						<input type="email" name="Email" placeholder="Your Email">
					</div>
					<div class="col-md-6">
						<input type="number" name="Number" placeholder="Your Number">
					</div>
					<div class="col-md-6">
						<input type="text" name="Name" placeholder="Subject">
					</div>
					<div class="col-md-12">
						<textarea name="Message" placeholder="Write a message"></textarea>
					</div>
					</div>
					</div>
					<div class="col-md-12">
						<div class="frm-btn">
						<input type="submit" name="Submit" value="Submit" class="thm-btn">
						</div>
					</div>
					
				

			</form>
			</div>
		</div>
	</div>
</section>

<section class="cta animated wow animate__bounceInDown">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
            <div class="cta-inner">
              <div class="cta-one-shape-1"></div>
               <div class="cta-one-shape-2"></div>
               <div class="cta-one-shape-3"></div>
               <div class="txtwrp">
                <h2>THE PASSION TRYING & SKILL CAN MAKE
A TOP-PERFORMING COMPANY</h2>
               </div>
             <div class="btnwrp">
               <a class="cta-one__btn thm-btn" href="contact.php">LET’S GET STARTED</a>
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