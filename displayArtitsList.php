<?php
include("dbconnect.php")

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>artist database</title>
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
<h1>Artist Database</h1>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row)
{
?>

<?php
    echo "ID: ";
    echo "$row[id]<br>";
    echo "<a href='artistdetails.php?rowid=$row[id]'>\nname:\n";
	echo "$row[name]<br> summary: $row[summary]<br>";
    echo "<img src='$row[imageUrl]'><br>";
    echo "<input type='hidden' name='id' value='$row[id]' /></a><br>";
    echo "<input type='hidden' name='email' value='$row[email]' /></a><br>";
    echo "<input type='hidden' name='phone' value='$row[phone]' /></a><br>";
    echo "<input type='hidden' name='fax' value='$row[fax]' /></a><br>";
    
	
?>



<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>  
</body>
</html>