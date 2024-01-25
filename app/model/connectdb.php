<?php
// Database connection parameters (define these as constants)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'web');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

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
