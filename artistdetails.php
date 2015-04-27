<?php
include("dbconnect.php")

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>artist details</title>
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


<fieldset class="subtleSet">

<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists WHERE id = '$_REQUEST[rowid]'";

foreach ($dbh->query($sql) as $row)
{
?>

<?php
   
	echo "<h1>$row[name]:</h1>";
    
    echo "$row[details]<br>";
    echo "<a href=$row[webpage]>Webpage</a><br>";
    echo "phone: $row[phone]<br>";
    echo "mobile: $row[mobile]<br>";
    echo "Fax: $row[fax]<br>";
    echo "email: $row[email]<br>";
    echo "<input type='hidden' name='id' value='$row[id]' />";
	echo "<img src='$row[imageUrl]'>";
?>


<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>