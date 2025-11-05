<?php

$hostName = "localhost";
$dbUser = "root";
$password = "";
$dbName = "";
$conn = mysqli_connect($hostName, $dbUser, $password, $dbName);

if(!conn){
    die("Something went wrong")
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";

?>