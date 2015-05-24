<?php
session_start();
?>
<?php
echo "username: {$_SESSION['username']}";
echo "<br>";
echo "ID: {$_SESSION['id']}";
echo "<br>";
echo "paid: {$_SESSION['paid']}";
?>