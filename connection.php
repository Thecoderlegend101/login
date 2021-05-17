<?php
$servername = "localhost";
$username = "rootdarsh";
$password = "darsh@123";
$dbname = "cakery";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>