<?php

session_start();
include("php/dbconnect.php")

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - bulletin Board</title>
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
            
        </header>
        <section class="bulletinboard">
        <h1>Bulletin Board</h1>
        

        <ul class="bulletinboard-list">
            
<?php
$sql = "SELECT * FROM bullitens ORDER BY date";
foreach ($dbh->query($sql) as $row) {
    if (time() < $row['expire']) {
        $date = date('l jS \of F Y h:i:s A', $row['date']);
?>            
            <li>
                <div class="bulletin-container">
                    <div class="bulletin-details">
                        <ul class="bulletin-details-list">
                            <li><span class="bulletin-user"><?php  echo "$row[user]"; ?></span></li>
                            <li><span class="bulletin-date"><?php  echo "$date"; ?></span></li>
                        </ul>
                    </div>
                    <div class="artist-image"><img <?php echo "src='$row[thumb]' alt='$row[name]'";?>/></div>
                    <div class="bulletin-info">
                        <h2 class="bulletin-info-title"><?php echo "$row[name]"; ?></h2>
                        <div class="bulletin-info-text">
                            <?php echo "$row[details]"; ?>
                        </div>
                        <ul class="bulletin-button-list">
                            <?php if ($row[link] != "") { ?>
                            <li>
                                <div class="event-button"><a href="<?php echo "$row[link]"; ?>" class="ui small button colored">Webpage</a></div></li> <?php } 
        if ($row[user] == $_SESSION[username]) { ?>
                            <li>
                                <div class="event-button"><a href="#editBulliten" class="ui small button colored">user edit</a></div></li> <?php } ?>
                        </ul>
                    </div>
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
    </div>
        </div>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>
<?php
require("php/footer.php");
?>
    
    
</body>
</html>
