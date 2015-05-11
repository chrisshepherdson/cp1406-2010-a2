<?php

session_start();
include("php/dbconnect.php");

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">   
<title>Townsville Community Music Centre</title> 
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">  
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>   
<script src="js/jquery.royalslider.min.js"></script>
</head>

<!-- START Logo -->    
<body>
    
    <!---import headde--->
    
<?php
require("php/header.php");
?>

    

<!-- END Navigation -->
    
<!-- START Slider -->
    <div id="boxed_content" class="boxed_content">
    <div class="inner">
				<div id="home-slider-1" class="royalSlider rsMinW">
				  <div class="rsContent slide2">
				    <a class="rsImg" href="images/thumb/slider.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Insert Artist</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Insert Concert Title</span><br><br>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="#" class="ui button colored">Insert Action</a>
				    	</div>
				    </div>
				  </div>
				</div>
                

				<script id="addJS">
				jQuery(document).ready(function($) {
						jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
							$('#home-slider-1').royalSlider({
							arrowsNav: true,
							arrowsNavAutoHide: true,
							fadeinLoadedSlide: false,
							controlNavigationSpacing: 0,
							controlNavigation: 'bullets',
							imageScaleMode: 'none',
							imageAlignCenter:false,
							blockLoop: true,
							loop: true,
							numImagesToPreload: 6,
							transitionType: 'fade',
							keyboardNavEnabled: true,
							block: {
								delay: 400
							}
						});
				});
				</script>
<!-- END Slider -->  
<div id="content" class="site-content">
<div class="artist">
<!-- MAIN Heading -->
<site-body class="site-body">
<div class="container"> 
<h4>Artists</h4>
<article class="post clearfix">
<!-- IMAGE Artist 1 -->
<!-- Duplicate this section till END Artist 1 and Paste Below for more Artists-->
<div class="entry-thumb">
<a href="#"><img src="images/thumb/Artists/artist1.jpg" alt="#"></img></a>
</div>
<!-- TEXT -->
<div class="entry-detail">
<div class="entry-header">
<h2 class="entry-title"><a href="#">Insert Artist</a></h2>
<div class="entry-meta">
<span>Insert Sub-Title</span>
<span><span class="sep">/</span>
<a href="#">Insert Website or Link</a>
</span>
</div>
<div class="entry-content">
<h1>Heading One</h1>
<p>Insert Description</p>
<h2>Heading Two</h2>
<p>Insert Description</p>
<h3>Heading Three</h3>
<p>Insert Description</p>
<h4>Heading Four</h4>
<p>Insert Description</p>
<h5>Heading Five</h5>
<p>Insert Description</p>
<h6>Heading Six</h6>
<p>Insert Description</p>
</div>
<div>
<a href="#" class="ui small button">Insert Text</a>
</div>
</div>
</div>
</article>
</site-body>
</div>
<!-- END Arist 1 -->

<?php
require("php/footer.php");
?>

</body>
</html>