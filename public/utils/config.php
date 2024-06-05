<?php
// Database connection
$servername = "sql107.infinityfree.com";
$username = "if0_36677470";
$password = "baTdrW9iT1";
$database = "gad";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
