<?php
session_start();
include("php/dbconnect.php");
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
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
    selector: "textarea",
    menubar: false,
     toolbar: false,
    statusbar : false
    
    
});
</script>
</head>
<!-- START Logo -->
<body>

<?php 
if ($_SESSION[username] == "Administrator") {
    echo "you are admin";
    
    ?>
    <br>
<a href="db/adminer?sqlite=&username=&db=tcmc.sqlite&select=artists">Edit artists</a>
    <br>
<a href="db/adminer?sqlite=&username=&db=tcmc.sqlite&select=users">Edit users</a>
    <br>
    <a href="db/adminer?sqlite=&username=&db=tcmc.sqlite&select=events">Edit events</a>
    <br>
    <a href="db/adminer?sqlite=&username=&db=tcmc.sqlite&select=bullitens">Edit bulletins</a>
    <br>
    <a href="index.php">go home</a><br><br><br>
    
 
    
    <?php
    
} else {
    echo "you are not admin";
}
?>
    
       </body>
</html>
