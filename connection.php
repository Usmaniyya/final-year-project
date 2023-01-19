<?php 
session_start();
// DB credentials.
$host = "localhost";
$user = "root";
$pass = "";
$database = "SIPS";
// Establish database connection.
$connection =mysqli_connect($host,$user,$pass,$database);
?>