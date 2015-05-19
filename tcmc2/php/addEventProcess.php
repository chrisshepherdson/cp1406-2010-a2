<?php

session_start();
try {
    $dbh = new PDO("sqlite:../db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

echo "$_REQUEST[name]";
echo "$_REQUEST[name]";
echo "$_REQUEST[name]";
echo "$_REQUEST[name]";
echo "$_REQUEST[name]";
echo "$_REQUEST[name]";



?>