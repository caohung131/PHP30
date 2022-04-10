<?php
$servername = "localhost:9999";
$username = "root";
$password = "";
$database = "blogs";

// Create connection
$conn = new mysqli($servername, $username, $password , $database );

// var_dump($conn);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>