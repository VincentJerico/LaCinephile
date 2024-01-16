<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lcpdb";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) 
{
    die("FAILED TO CONNECT!");
}

?>