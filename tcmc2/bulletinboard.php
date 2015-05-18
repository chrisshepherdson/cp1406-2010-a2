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
            
            <li>
                <div class="bulletin-container">
                    <div class="bulletin-details">
                        <ul class="bulletin-details-list">
                            <li><span class="bulletin-user">Username</span></li>
                            <li><span class="bulletin-date">Date</span></li>
                        </ul>
                    </div>
                    <div class="bulletin-image">IMAGE</div>
                    <div class="bulletin-info">
                        <h3 class="bulletin-info-title">BULLETIN ONE</h2>
                        <div class="bulletin-info-text">
                            insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, 
                        </div>
                        <ul class="bulletin-button-list">
                            <li><div class="event-button"><a href="#" class="ui small button colored">Button 1</a></div></li>
                            <li><div class="event-button"><a href="#" class="ui small button colored">Button 2</a></div></li>
                        </ul>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="bulletin-container">
                    <div class="bulletin-details">
                        <ul class="bulletin-details-list">
                            <li><span class="bulletin-user">Groot</span></li>
                            <li><span class="bulletin-date">06-08-1945</span></li>
                        </ul>
                    </div>
                    <div class="bulletin-image">IMAGE</div>
                    <div class="bulletin-info">
                        <h3 class="bulletin-info-title">BULLETIN TWO</h2>
                        <div class="bulletin-info-text">
                            insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, insert bulletin here, 
                        </div>
                        <ul class="bulletin-button-list">
                            <li><div class="event-button"><a href="#" class="ui small button colored">Facebook</a></div></li>
                            <li><div class="event-button"><a href="#" class="ui small button colored">Email</a></div></li>
                        </ul>
                    </div>
                </div>
            </li>
        
        
        </ul>
        
        
    
    </section>
        
        
        </div>
    </div>
        </div>

<?php
require("php/footer.php");
?>
    
    
</body>
</html>
