<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get the user ID from the session
    $userId = $_SESSION['user_id'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the user account
    $sql = "DELETE FROM users WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        // Account deleted successfully

        // Clear the session data
        session_unset();
        session_destroy();

        // Redirect to the homepage or login page after successful deletion
        header('Location: ../view/homepage.php'); // or '../login.php'
        exit();
    } else {
        // Error deleting account
        echo "Error deleting account: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // User not logged in
    echo "Error: User not logged in.";
}
?>