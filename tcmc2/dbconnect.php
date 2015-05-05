<?php
try {
    $dbh = new PDO("sqlite:artist.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>