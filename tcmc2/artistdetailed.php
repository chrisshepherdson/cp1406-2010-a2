<?php
session_start();
include("php/dbconnect.php")

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
<li ><a href="index.php">Home</a></li>
<li><a href="#">Events</a></li> <li><a href="#">Bulletin Board</a></li>
<li class="current-menu-item"><a href="artists.php">Artists</a></li>
<li><a href="#">Members</a></li>
<li><a href="about.php">About</a></li>
<li><a href="#">Contact</a></li>
    <?php

    if (isset($_SESSION['username'])) {
        echo "<li><a href='php/logout.php'>Logout</a></li>";
    echo "<li>{$_SESSION['username']}</li>";
    } else {
        echo "<li><a href='#openModal'>Login</a></li>";
}

?>
    <?php
include("php/login.php");
?>
</ul>
</div>
</nav>
<!-- END Navigation -->


<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists WHERE id = '$_REQUEST[rowid]'";
foreach ($dbh->query($sql) as $row)
{
?>

<?php   
echo "<section class='artistdetailed'>";
echo     "<div class='artistdetailed-image'>";
    echo    "<h2 class='artistdetailed-name'>$row[name]</h2>";
echo        "<img src='$row[imageUrl]' width='800' height='363' alt='$row[name]'>";
echo    "</div>";
echo    "<h2 class='artistdetailed-name'>$row[name]</h2>";
echo    "<div class='artistdetailed-info'>";
echo        "<p>$row[details]</p>";
echo "<h3>Contact information:</h3>";
echo "<table class='contact-table'>";
if (isset($row[phone]))
{
    echo "<tr>";
    echo "<td>Phone:</td>";
    echo "<td>$row[phone]</td>";
    echo "</tr>";
}
if (isset($row[mobile]))
{
    echo "<tr>";
    echo "<td>Mobile:</td>";
    echo "<td>$row[mobile]</td>";
    echo "</tr>";
}
if (isset($row[fax]))
{
    echo "<tr>";
    echo "<td>Fax:</td>";
    echo "<td>$row[fax]</td>";
    echo "</tr>";
}
echo "</table>";
if (isset($row[email])) 
{
    echo        "<a href='mailto:$row[email]' class='ui button colored'>Email</a>";
}
 if (isset($row[webpage])) 
{
    echo        " <a href='$row[webpage]' class='ui button colored'>Webpage</a>";
}
else {}
    
    if ($row[user] == $_SESSION['username'] or $_SESSION['username'] == 'Administrator') {
        
         echo        " <a href='#openModal3' class='ui button colored'>Update Details</a>";
        include("php/updateDetails.php");
    }
    
    
echo    "</div> ";           
echo "</section>";
$hits = $row[hits] + 1;
?>

<?php
}
echo "</fieldset>\n";

//increments hits
$sql = "UPDATE artists SET hits = '$hits' WHERE id = '$_REQUEST[rowid]'"; 
$dbh->exec($sql);


// close the database connection
$dbh = null;
?> 
    
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
