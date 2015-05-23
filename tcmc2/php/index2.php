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
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>

<body>
<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); 
?>



  <header class="boxed_content">
    <!-- START Logo -->
    <a href="index.php" id="logo-link" rel="home">
      <img src="images/logo.png" id="logo" alt="Townsville Community Music Centre Logo" />
    </a>
    <!-- END Logo --> 

  <div id="show-menu"><a href="#">Menu</a></div>

    <!-- START Navigation -->
    <nav class="site-navigation primary-navigation">
      <div class="menu-all-pages-container">
        <ul class="nav-menu">
          <li <?php if ($name == "index") echo 'class="current-menu-item"'; ?>><a href="index.php">Home</a></li>
          <li <?php if ($name == "events") echo 'class="current-menu-item"'; ?>><a href="events.php">Events</a></li>
          <li <?php if ($name == "bulletinboard") echo 'class="current-menu-item"'; ?>><a href="bulletinboard.php">Bulletin Board</a></li>
          <li <?php if ($name == "artists" or $name == "artistdetailed") echo 'class="current-menu-item"'; ?>><a href="artists.php">Artists</a></li>
          <li <?php if ($name == "members") echo 'class="current-menu-item"'; ?>><a href="members.php">Members</a></li>
          <li <?php if ($name == "about") echo 'class="current-menu-item"'; ?>><a href="about.php">About</a></li>
          <li <?php if ($name == "contact") echo 'class="current-menu-item"'; ?>><a href="contact.php">Contact</a></li>
<?php

    if (isset($_SESSION['username'])) {
        echo "<li><a href='php/logout.php'>Logout</a></li>";
  //  echo "<li>{$_SESSION['username']}</li>";
    } else {
        echo "<li><a href='#openModal'>Login</a></li>";
}

?>
        </ul>
<?php

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}


echo    "<div id='openModal' class ='modalDialog'>";     
echo        "<div>";
echo		"<a href='#close' title='Close' class='close'>X</a>";
echo		"<h2>Login</h2>";

if (isset($_SESSION['error'])) {
    echo        "<h3>$error</h3>";
}

echo		"<form id='login' name='login' method='post' action='' >";
echo        "<table>";
echo        "<tr>";
echo            "<td><label class='loginlabel' for='username'>Username</label></td>";
echo            "<td><input name='username' class='username' type='text' id='username' placeholder='email'></td>";
echo                "</tr>";
echo                "<tr>";
echo            "<td><label class='loginlabel' for='password'>Password</label></td>";
echo            "<td><input name='password' class='password' type='password' id='password' placeholder='username'></td>";
echo            "</tr>";
echo            "</table>";
echo            "<input name= 'submit' class='submit' type='submit' value='Login' >";            
echo            "</form>";  
echo      "</div>";
    
            

if (isset($_POST['submit'])) 
{
    
    $sql = "SELECT * FROM users WHERE username = '{$_POST['username']}'";
    foreach ($dbh->query($sql) as $row) 
    {
        if ($row[username] == $_POST['username']) 
        {
            if ($row[password] == md5($_POST['password'])) 
            {
                unset($_SESSION['error']);
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $row[Id];
                $_SESSION['paid'] = $row[paid];
                header("Location:#close");
            } 
            else 
            {
                $_SESSION['error'] = 'Invalid Password';
                unset($_POST['username']);
                unset($_POST['password']);
              //  header("Location:#openModal");
            }
        } 
        else 
        {
            $_SESSION['error'] = 'invalid username';
            unset($_POST['username']);
            unset($_POST['password']);
         //   header("Location:#openModal");
        }
    }

}
?>
</div>
    </nav>
    <!-- END Navigation -->
  </header>

<!-- WEBSITE LAYOUT Box -->
    <div class="page-inner">
  <div class="container">
<div id="boxed_content" class="boxed_content">
<div class="inner">
<div id="content" class="site-content">
				<div id="home-slider-1" class="royalSlider rsMinW">

				  <div class="rsContent slide2">
				    <a class="rsImg" href="images/thumb/slider1.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Join the TCMC Team</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Become a Member</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="members.php" class="ui huge button coloured">Join Now</a>
				    	</div>
				    </div>
				  </div>

				  <div class="rsContent slide2">
				    <a class="rsImg" href="images/thumb/slider2.jpg" ></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Never Miss An Event Again</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Explore Upcoming Events</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="events.php" class="ui huge button coloured">View Events</a>
				    	</div>
				    </div>
				  </div>

				  <div class="rsContent slide3">
				    <a class="rsImg" href="images/thumb/slider3.jpg"></a>
				    <div class="bContainer">
				    	<div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Join the Experience</div>
				    	<div class="rsABlock rs_text_box" data-move-effect="bottom">
				    		<span>Volunteer at Events</span>
				    	</div>
				    	<div class="rsABlock" data-move-effect="bottom">
				    		<a href="members.php" class="ui huge button coloured">Sign Up</a>
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

  
    <div class="content"> <a href="about.php" class="white">
      <h2>About Us</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <a href="about.php"> <div class="event-image"><img src="images/CivicFront300.jpg" width="244" height="170" alt="The Townsville Community Music Centre"></div></a>
            <div class="event-info">
              <h3 class="event-info-name">Townsville Community Music Centre</h3>
              <div class="event-info-text"> Based in Townsville, North Queensland, the Music Centre presents concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists. </div>
              <br>
              <div class="event-button"><a href="about.php" class="ui small button coloured">Read More</a></div>
            </div>
              </div>
                </li>
        </ul>
      </section>
      <br />
      <a href="events.php" class="white">
      <h2>Upcoming Events</h2>
      </a>
        <!-- events start -->
      <section class="events">
        <ul class="events-list">
            
<?php
    $closest1 = INF;
    $closest2 = INF;
    $sql = "SELECT * FROM events";
    foreach ($dbh->query($sql) as $row) {
        if (time() < $row[time] and $row[time] <= $closest1 ) {
            $closest2 = $closest1;
            $closest1 = $row[time];
        } elseif (time() < $row[time] and $row[time] <= $closest2 ) {
            $closest2 = $row[time];
        }
    

    }
    $sql = "SELECT * FROM events WHERE time = '$closest1'";
    foreach ($dbh->query($sql) as $event1) {}
    $sql = "SELECT * FROM events WHERE time = '$closest2'";
    foreach ($dbh->query($sql) as $event2) {}
    

    
?>

            <li>
                <div class="event-container">
                    <?php
$sql = "SELECT thumb FROM artists WHERE id = '$event1[artistId]'";
foreach ($dbh->query($sql) as $artist) {}
$date = date('l jS \of F Y h:i:s A', $event1[time]);
?>
                <div class="artist-image"><img <?php echo "src='$artist[thumb]' alt='$artist[name]'";?>/></div>
                <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$event1[name]"; ?></h3>
                    <div class="event-info-details"> 
                        <span class="event-time"><strong><?php echo "$date"; ?></strong></span>  
                        <span class="event-location"> at the <?php echo "$event1[location]"; ?></span>                         
                    </div>
                    <div class="artist-info-bio"><?php echo "$event1[details]"; ?></div>
                    <br>
                    
                </div> 
            </div>
            </li>
            <li>
                <div class="event-container">
                    <?php
$sql = "SELECT thumb FROM artists WHERE id = '$event2[artistId]'";
foreach ($dbh->query($sql) as $artist) {}
$date = date('l jS \of F Y h:i:s A', $event2[time]);
?>
                <div class="artist-image"><img <?php echo "src='$artist[thumb]' alt='$artist[name]'";?>/></div>
                <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$event2[name]"; ?></h3>
                    <div class="event-info-details"> 
                        <span class="event-time"><strong><?php echo "$date"; ?></strong></span>  
                        <span class="event-location"> at the <?php echo "$event2[location]"; ?></span>                         
                    </div>
                    <div class="artist-info-bio"><?php echo "$event2[details]"; ?></div>
                    <br>
                    
                </div> 
            </div>
          </li>
        </ul>
      </section>
      <br>
      <a href="bulletinboard.php" class="white">
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
              <div class="event-button"><a href="bulletinboard.php" class="ui small button coloured">Read More</a></div>
                </div> </div>
          </li>
        </ul>
      </section>
      <br>
      <a href="artists.php" class="white">
      <h2>Popular Artists</h2>
      </a>
        <!--artist start-->
      <section class="events">
        <ul class="events-list">
            
<?php
    $mostvisited1 = 0;
    $mostvisited2 = 0;
    $sql = "SELECT * FROM artists";
    foreach ($dbh->query($sql) as $row) {
        if ($row[hits] >= $mostvisited1) {
            $mostvisited2 = $mostvisited1;
            $mostvisited1 = $row[id];
        } elseif ($row[hits] >= $mostvisited2) {
            $mostvisited2 = $row[id];
        }
    

    }
    $sql = "SELECT * FROM artists WHERE id = '$mostvisited1'";
    foreach ($dbh->query($sql) as $artist1) {}
    $sql = "SELECT * FROM artists WHERE id = '$mostvisited2'";
    foreach ($dbh->query($sql) as $artist2) {}
    
    
?>

            <li>
                <div class="event-container">
                    <div class="artist-image"><img <?php echo "src='$artist1[thumb]'" ?> <?php echo "alt='$artist1[name]'" ?>></div>
                    <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$artist1[name]" ?></h3>
                    
                    <div class="artist-info-bio"><?php echo "$artist1[summary]" ?> </div>
                    <br>
                    <div class="artist-button-homepage"><a <?php echo "href='artistdetailed.php?rowid=$artist1[id]'" ?> class="ui small button colored">Read More</a></div>
                    </div> 
                </div>
            </li>
            <li>
                <div class="event-container">
                    <div class="artist-image"><img <?php echo "src='$artist2[thumb]'" ?> <?php echo "alt='$artist2[name]'" ?>></div>
                    <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$artist2[name]" ?></h3>
                    <div class="artist-info-bio"><?php echo "$artist2[summary]" ?> </div>
                    <br>
                    <div class="artist-button-homepage"><a <?php echo "href='artistdetailed.php?rowid=$artist2[id]'" ?> class="ui small button coloured">Read More</a></div>
                    </div>
                </div>
          </li>
        </ul>
      </section>
    <br>
      <section class="bottom-section">
        <h3>Sponsors</h3>
        <div class="bottom-featured-img"><a href="http://www.townsville.qld.gov.au/Pages/default.aspx" target="_blank" class="tooltip-top" data-tooltip="The Council's Partnerships and Sponsorships scheme provides vital core funding which enables us to maintain the administrative base for all our other activities, and also provides the premises which house our office space. 
The Council also assists with the performance venues for our concerts and workshops."><img src="images/sponsor-townsville.jpg" alt="City of Townsville logo"></a></div>
		<div class="bottom-featured-img"><a href="https://www.qld.gov.au/" target="_blank" class="tooltip-top" data-tooltip="The Gambling Community Benefit Fund has assisted us to obtain office equipment and sound and lighting equipment for our productions."><img src="images/sponsor-qld-gov.jpg" alt="The Queensland Government logo"></a></div>
      </section>
      <br />
      
      <!-- END #primary --> 
      
               </div>
  </div>                                                                                                    

<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>

  <!-- END .site-content -->
    <div class="footer-wrapper ">
      <footer class="site-footer container">
      <div class="content">
        <div class="footer-logo"><a href="index.php"><img src="images/logo.png" width="147px" height="98px" alt="logo" /></a></div>
        <ul class="footer-navigation">
          <li><a href="index.php">Home</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="bulletinboard.php">Bulletin Board</a></li>
          <li><a href="artists.php">Artists</a></li>
          <li><a href="members.php">Members</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="footer-contact">
          <li class="footer-contact-address">41 Boundary Street, Townsville</li>
          <li class="footer-contact-email"> <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a> </li>
          <li class="footer-contact-phone">Phone: 07 4724 2086</li>
        </ul>
        <div class="footer-facebook">
          <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534" target="_blank">
            <div class="fb-icon"></div>
            <img src="images/fb2.png" style="display: none;" />
          </a>
        </div>
      </footer>
    </div>
    
  </div>
  <!-- END .inner --> 
  
</div>
<!-- END #boxed-content -->

<script type="text/javascript">
  $(document).ready(function(){
    $('header #show-menu').click(function(e){
      e.preventDefault();
      $('header nav.site-navigation').toggle('slow');
    });

    $( window ).resize(function(){
      if(window.innerWidth > 1024) {
        $("header nav.site-navigation").removeAttr("style");
      }
    });
  });
</script>

    </div></div>                                                                       
</body>
</html>
