<?php
session_start();
?>
<?php 
if ($_SESSION[username] == "Administrator") {
    echo "you are admin";
} else {
    echo "you are not admin";
}
?>