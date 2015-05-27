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
    
    
    <h2>Current artists:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row) {
?>
<form id="deleteForm" name="deleteForm" method="post" action="php/registerUser.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> 
	<input type='textarea' name='summary' value='$row[summary]' /> 
	<input type='textarea' name='details' value='$row[details]' />
	<input type='text' name='webpage' value='$row[webpage]' />
	<input type='text' name='user' value='$row[user]' />
	<input type='number' name='hidden' value='$row[hidden]' />
	<input type='email' name='email' value='$row[email]' />
	<input type='number' name='phone' value='$row[phone]' />\n";
	echo "<input type='hidden' name='id' value='$row[Id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}

 
 ?>
    
   
<h2>Current users:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM users";
foreach ($dbh->query($sql) as $row) {
?>
<form id="deleteForm" name="deleteForm" method="post" action="php/registerUser.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> 
	<input type='text' name='username' value='$row[username]' /> 
	<input type='textarea' name='address' value='$row[address]' />
	<input type='number' name='number' value='$row[number]' />
	<input type='textarea' name='comments' value='$row[comments]' />
	<input type='number' name='paid' value='$row[paid]' />\n";
	echo "<input type='hidden' name='id' value='$row[Id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}

 
 ?>
	
	<h2>Current events:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row) {
?>
<form id="deleteForm" name="deleteForm" method="post" action="php/addEventProcess.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> 
	<input type='text' name='location' value='$row[location]' /> 
	<input type='textarea' name='details' value='$row[details]' />
	<input type='number' name='artistId' value='$row[artistId]' />
	<input type='number' name='time' value='$row[time]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}

 
 ?>
    
	
	<h2>Current bulletins:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM bullitens";
foreach ($dbh->query($sql) as $row) {
?>
<form id="deleteForm" name="deleteForm" method="post" action="php/registerUser.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> 
	<input type='text' name='user' value='$row[user]'/> 
	<input type='textarea' name='details' value='$row[details]' />
	<input type='number' name='date' value='$row[date]' />
	<input type='text' name='emails' value='$row[email]' />
	<input type='number' name='expire' value='$row[expire]' />
	<input type='number' name='number' value='$row[number]' />\n";
	echo "<input type='hidden' name='id' value='$row[Id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}

 
 ?>
	
    
    <?php
    
} else {
    echo "you are not admin";
}
?>
    
       </body>
</html>
