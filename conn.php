<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "curtural_events";

$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 
?>