<?php

session_start();
include("php/dbconnect.php")

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Events</title>
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

<section class="events">
    <ul class="events-list">
<?php 
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row) {
    $artist;
    $sql2 = "SELECT * FROM artists WHERE id='$row[artistId]'";
    foreach ($dbh->query($sql2) as $art) {
        $artist = $art;
    }
    if (time() < $row['time']) {
       $date = date('l jS \of F Y h:i:s A', $row['time']);

?>


        <li>
            <div class="event-container">
                <div class="artist-image"><img <?php echo "src='$artist[thumb]' alt='$artist[name]'";?>></img></div>
                <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$row[name]"; ?></h3>
                    <div class="event-info-details"> 
                        <span class="event-time"><?php echo "$date"; ?></span>  
                        <span class="event-location"> at the <?php echo "$row[location]"; ?></span>                         </div>
                    <div class="event-info-text"><?php echo "$row[details]"; ?></div>
                    <br>
                    
                </div> 
            </div>
        </li>
                        
<?php
    }
}
?>
</ul>
</section>
        </div>

<?php
require("php/footer.php");
?>
    
    
</body>
</html>
