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
    
<?php
    require("php/header.php");
?>

<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
    <div class="inner">
<div class="content">
    <div class="page-innter">
    <div class="">
        <header class="page-header">
            <h1 class="page-title">Events</h1>
        </header>
    
        
        <div class="content">

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
echo                      "<div class='artist-image'><img src='$row[thumb]' alt='$row[name]'></div>";
echo                       "<div class='artist-info'>";
echo                           "<h3 class='artist-info-name'>$row[name]</h2>";
echo                            "<div class='artist-info-bio'>$row[summary]";
echo                            "<div class='artist-button'><a href='artistdetailed.php?rowid=$row[id]' class='ui small button colored'>Read More</a></div></div>";
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
<?php
    if (isset($_SESSION['username'])) {
        echo                            "<div class='artist-button'><a href='#openModal2' class='ui small button colored'>Add new artist</a></div>";
    include("php/addArtist.php");
}
?> 
    
        </div>
        </div>
    </div>
        </div>

<?php
require("php/footer.php");
?>
    
    
</body>
</html>