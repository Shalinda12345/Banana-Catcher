<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "whack_a_mole";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("Something went wrong.........");
}

?>