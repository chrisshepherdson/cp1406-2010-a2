<?php
try {
/* connect to SQLite database. */
    $dbh = new PDO("sqlite:tcmc04.sqlite");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
