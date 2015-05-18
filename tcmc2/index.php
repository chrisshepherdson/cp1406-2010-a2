<?php

session_start();
include("php/dbconnect.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Artists</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>

<body>
<?php
require("php/header.php");
?>
<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
<div class="inner">
<div id="content" class="site-content">
				<div id="home-slider-1" class="royalSlider rsMinW">

				  <div class="rsContent slide2">
				    <a class="rsImg" href="../images/thumb/slider2.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Insert Text</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Insert Text</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="#" class="ui huge button coloured">Insert Text</a>
				    	</div>
				    </div>
				  </div>

				  <div class="rsContent slide1">
				    <a class="rsImg" href="../images/thumb/slider1.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Insert Text</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Insert Text</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="#" class="ui huge button coloured">Insert Text</a>
				    	</div>
				    </div>
				  </div>

				  <div class="rsContent slide3">
				    <a class="rsImg" href="../images/thumb/slider3.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Insert Text</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Insert Text</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="#" class="ui huge button coloured">Insert Text</a>
				    	</div>
				    </div>
				  </div>
				  
				</div> <!-- END royalSlider -->
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
<div class="page-inner">
  <div class="container">
    </header>
    <div class="content"> <a href="about.html" class="white">
      <h2>About Us</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <div class="event-image"></div>
            <div class="event-info">
              <h3 class="event-info-name">Townsville Community Music Centre</h3>
              <div class="event-info-text"> Based in Townsville, North Queensland, the Music Centre presnts concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists. </div>
              <br>
              <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
            </div>
          </li>
        </ul>
      </section>
      <br />
      <a href="events.html" class="white">
      <h2>Upcoming Events</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <div class="event-image"></div>
            <div class="event-info">
              <h3 class="event-info-name">EVENT ONE</h3>
              <div class="event-info-details"> <span class="event-time">time</span> <span class="event-day">day</span> <span class="event-date">date</span> <span class="event-location">location</span> </div>
              <div class="event-info-text"> event details, event details, event details, event details, event details, event details, event details, event details, event details, </div>
              <br>
              <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
            </div>
          </li>
          <li>
            <div class="event-container">
              <div class="event-image"></div>
              <div class="event-info">
                <h3 class="event-info-name">EVENT ONE</h3>
                <div class="event-info-details"> <span class="event-time">time</span> <span class="event-day">day</span> <span class="event-date">date</span> <span class="event-location">location</span> </div>
                <div class="event-info-text"> event details, event details, event details, event details, event details, event details, event details, event details, event details, </div>
                <br>
                <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <br>
      <a href="bulletinboard.html" class="white">
      <h2>Bulletin Board Highlights</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <div class="event-image"></div>
            <div class="event-info">
              <h3 class="event-info-name">EVENT ONE</h3>
              <div class="event-info-details"> <span class="event-time">time</span> <span class="event-day">day</span> <span class="event-date">date</span> <span class="event-location">location</span> </div>
              <div class="event-info-text"> event details, event details, event details, event details, event details, event details, event details, event details, event details, </div>
              <br>
              <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
            </div>
          </li>
        </ul>
      </section>
      <br>
      <a href="artists.html" class="white">
      <h2>Popular Artists</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <div class="event-image"></div>
            <div class="event-info">
              <h3 class="event-info-name">EVENT ONE</h3>
              <div class="event-info-details"> <span class="event-time">time</span> <span class="event-day">day</span> <span class="event-date">date</span> <span class="event-location">location</span> </div>
              <div class="event-info-text"> event details, event details, event details, event details, event details, event details, event details, event details, event details, </div>
              <br>
              <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
            </div>
          </li>
          <li>
            <div class="event-container">
            <div class="event-image"></div>
            <div class="event-info">
              <h3 class="event-info-name">EVENT ONE</h3>
              <div class="event-info-details"> <span class="event-time">time</span> <span class="event-day">day</span> <span class="event-date">date</span> <span class="event-location">location</span>
                <div class="event-info-text"> ... </div>
                <br>
                <div class="event-button"><a href="#" class="ui small button coloured">Read More</a></div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <br>
      <section class="bottom-section">
        <h3>Sponsors</h3>
        <div class="bottom-featured-img"><a href="http://www.townsville.qld.gov.au/Pages/default.aspx"><img src="images/1a.jpg"></a></div>
        <div class="bottom-featured-img"><a href="https://www.qld.gov.au/"><img src="images/1b.jpg"></a></div>
      </section>
      <br />
      
      <!-- END #primary --> 
      
    </div>
  </div>
  
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>

  <!-- END .site-content -->
  <?php
require("php/footer.php");
?>
</body>
</html>
