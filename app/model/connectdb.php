<?php
$servername = "us-cluster-east-01.k8s.cleardb.net";
$username = "b5f417f880e6cf";
$password = "f7fec413";
$database = "heroku_6853f831c061b28";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8 (optional)
$conn->set_charset("utf8");

// Additional error handling for queries (optional)
if ($conn->errno) {
    die("Database error: " . $conn->error);
}
?>