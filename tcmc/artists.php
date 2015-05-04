<?php

session_start();
include("dbconnect.php")

?>

<!doctype html>
<html lang="en">
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
<li><a href="index.php">Home</a></li>
<li><a href="#">Events</a></li> <li><a href="#">Bulletin Board</a></li>
<li class="current-menu-item"><a href="#">Artists</a></li>
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
</ul>
</div>
</nav>
<!-- END Navigation -->
    
        
        <section class="artists">
            
            <div class="artists-intro">
                <h2>Artists</h2>
                <p><strong>Free listing for Music Centre members! Publicise yourself, your band or organisation here!</strong></p>
                <p>Send your information, photos, etc. to: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br>
                or mail to: Townsville Community Music Centre, PO Box 1006, Townsville QLD, 4810</p>
            
            </div>
            
            <ul class="artist-list">
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>

<?php            
echo              "<li>";
echo                   "<div class='artist-container'>";
echo                      "<div class='artist-image'><img src='$row[imageUrl]' alt='$row[name]'></div>";
echo                       "<div class='artist-info'>";
echo                           "<h3 class='artist-info-name'>$row[name]</h2>";
echo                            "<div class='artist-info-bio'>$row[summary]</div>";
echo                            "<div class='artist-button'><a href='artistdetailed.php?rowid=$row[id]' class='ui small button colored'>Read More</a></div>";
    echo "<input type='hidden' name='email' value='$row[email]' /></a>";
    echo "<input type='hidden' name='phone' value='$row[phone]' /></a>";
    echo "<input type='hidden' name='fax' value='$row[fax]' /></a>";
    echo "<input type='hidden' name='id' value='$row[id]' /></a>";
echo                        "</div>";
echo                    "</div>";
echo                "</li>";
?>

<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?> 
            </ul>  
            
                 
        </section> 

<div class="footer-wrapper">
    <footer class="site-footer">
        
        <div class="footer-logo"><img src="images/logo.png" width=147px height=98px alt="logo"></div>
        <ul class="footer-navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Bulletin Board</a></li>
            <li><a href="#">Artists</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-contact">
            <li class="footer-contact-address">41 Boundary Street, Townsville</li>
            <li class="footer-contact-email">
                <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a>
                </li>
            <li class="footer-contact-phone">Phone: 07 4724 2086</li>
        </ul>
        <div class="footer-facebook"><a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_logo_small.png" width=29px height=29px alt="facebook"></a></div>
        
    </footer>
</div> 
    
    
</body>
</html>
