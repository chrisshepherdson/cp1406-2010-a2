<?php


include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: updateartist.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>artist processor</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";
// execute the appropriate query based on which submit button (insert, delete or update) was clicked
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO artists (name, summary, imageUrl, details) VALUES ('$_REQUEST[name]', '$_REQUEST[summary]', '$_REQUEST[imageUrl]', '$_REQUEST[details]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[name]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', summary = '$_REQUEST[summary]', imageUrl = '$_REQUEST[imageUrl]', details = '$_REQUEST[details]' WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[name]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

// Basic select and display all contents from table 

echo "<h2>Artist Records in Database Now</h2>\n";
$sql = "SELECT * FROM artists";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " records in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row[name] .' - '. $row[summary] .' - '. $row[imageUrl] .' - '. $row[details] . "<br />\n";
}

// close the database connection 
$dbh = null;
?>
<p><a href="updateartist.php">Return to database test page</a></p>
</body>
</html>