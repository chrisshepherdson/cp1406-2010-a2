<?php

session_start();
include("dbconnect.php");

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
<div class="container">
<a href="index.html" rel="home">
<br><img src="images/logo.png" alt="Townsville Community Music Centre Logo"></a><br/><br/>
</div>
<!-- END Logo -->
    
<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
<div class="inner">

<!-- START Navigation -->          
<nav class="site-navigation primary-navigation clearfix">
<div class="menu-all-pages-container">
<ul class="nav-menu">                      
<li class="current-menu-item"><a href="index.html">Home</a></li>
<<<<<<< HEAD:tcmc/index.html
<li><a href="events.html">Events</a></li>                                         
<li><a href="bulletinboard.html">Bulletin Board</a></li>
<li><a href="artists.html">Artists</a></li>
<li><a href="members.html">Members</a></li>
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
=======
<li><a href="#">Events</a></li>                                         <li><a href="#">Bulletin Board</a></li>
<li><a href="artists.php">Artists</a></li>
<li><a href="#">Members</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>

<?php

    if (isset($_SESSION['username'])) {
        echo "<li><a href='logout.php'>Logout</a></li>";
    echo "<li>{$_SESSION['username']}</li>";
    } else {
        echo "<li><a href='#openModal'>Login</a></li>";
}

?>
    <?php
include("login.php");
?>
>>>>>>> origin/master:tcmc/index.php
</ul>
</div>

            
            
</div>
    
    
</nav>
<!-- END Navigation -->
    
<!-- START Slider -->
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

        <footer class="site-footer">
			<div class="container">
                        <div class="column">
                                <h4>Footer</h4>
                                <div>
                                    <p>Insert</p>
<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534" class="ui small button">Facebook</a>          
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
	

</body>
</html>