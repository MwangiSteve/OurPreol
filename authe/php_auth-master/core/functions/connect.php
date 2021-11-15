<?php
$connect_error = 'Sorry, we\' re experiencing connection problems. ';
$servername = "localhost:8080";
$username = "root";
$password = "";
$dbname = "usio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
