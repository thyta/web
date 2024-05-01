<?php
// Database connection parameters (define these as constants if not already defined)
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'fdb1032.awardspace.net');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', '4413756_wpress58d8b8cb');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'taThy2003@');
}
if (!defined('DB_NAME')) {
    define('DB_NAME', 'webecom');
}

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