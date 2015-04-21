<?php
include("dbconnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>update database)</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
</head>

<body>
<h1>update Database</h1>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocess.php" enctype="multipart/form-data">
<?php
    
    echo "\nname:\n";
	echo "<input type='text' name='name' value='$row[name]' /> Summary: <input type='text' name='summary' value='$row[summary]' /> Details: <input type='text' name='details' value='$row[details]' /> Webpage: <input type='text' name='webpage' value='$row[webpage]' />\n";
    
    echo "<input type='hidden' name='id' value='$row[id]' />";
	
?>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>