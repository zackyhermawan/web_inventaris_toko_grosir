<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "warung_budi";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if(!$db) {
    die("Failed to connect: " . mysqli_connect_error());
    
};
?>