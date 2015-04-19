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
    echo "$row[id]";
    echo "<a href='/$row[name].html'>\nname:\n";
	echo "$row[name] summary: $row[summary]";
    echo "<img src='$row[imageUrl]'></a>";
    echo "<input type='hidden' name='id' value='$row[id]' />";
	
?>



<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>  
</body>
</html>