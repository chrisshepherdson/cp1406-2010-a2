<?php

session_start();

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
    
    <body>
      <?php  
        $username = $_SESSION['username'];
$password = $_SESSION['password'];
echo "$username";
    echo "$password";
        ?>
    </body>
</html>