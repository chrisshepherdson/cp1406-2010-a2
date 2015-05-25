<?php


session_start();
error_reporting(-1);

try {
    $dbh = new PDO("sqlite:../db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$debugOn = true;


?>



<?php

require("../php/upload_file.php");

?>
<?php


if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_REQUEST[expire])) {  
} else {
    header("Location: ../bulletinboard.php#postbulliten");
}

$expire = $_REQUEST[expire];
$expire = strtotime($expire);
$date  = $time();
echo = "$expire";
echo = "$date";



if ($_REQUEST['submit'] == "post bulletin") {
    
	$sql = "INSERT INTO bullitens (expire, user, name, date, image, thumb, details, link) VALUES ('$_REQUEST[name]',
        '$_REQUEST[summary]', '$fullimage_path', '$_REQUEST[details]', '$_REQUEST[webpage]', '$_REQUEST[fax]', '$_REQUEST[phone]', '$_REQUEST[email]',
        '$_REQUEST[mobile]', '$_SESSION[username]', '$thumbpath' )";
	if ($dbh->exec($sql)) {
        header("Location: ../bulletinboard.php");
    }
	else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Delete Artist") {
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
        header("Location: ../bulletinboard.php");
    } else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Update Artist") {
    echo "<p>Here I am</p>";
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', summary = '$_REQUEST[summary]', details = '$_REQUEST[details]',
    webpage ='$_REQUEST[webpage]', fax = '$_REQUEST[fax]', phone = '$_REQUEST[phone]', email = '$_REQUEST[email]', mobile = '$_REQUEST[mobile]' 
    WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
    		header("Location: ../bulletinboard.php");
    } else {
    echo "<p>Failed</p>";
    }
}
else {
echo "<p>Failed</P>";
}

$sql = "SELECT * FROM artists";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {

	$rows = $result->fetchall(PDO::FETCH_ASSOC);

}
foreach ($dbh->query($sql) as $row)
{

}

// close the database connection 
$dbh = null;
//header("Location: ../artists.php");
?>
