<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "orange";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>