<?php
$servername = "us-cluster-east-01.k8s.cleardb.net";
$username = "b5f417f880e6cf";
$password = "f7fec413";
$database = "heroku_6853f831c061b28";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If connection is successful, display HTML
?>

<!DOCTYPE html>
<html>

<head>
    <title>MySQL Connection Test</title>
</head>

<body>
    <h1>MySQL Connection Test</h1>
    <p>Connection to MySQL database successful!</p>
    <!-- Add more HTML content here -->
</body>

</html>

<?php
// Close the MySQL connection
mysqli_close($conn);
?>