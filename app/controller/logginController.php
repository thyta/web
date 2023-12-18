<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

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

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, phone, password FROM users WHERE phone = ?");

    // Check if prepare() was successful
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the phone number exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password_db = $row["password"];

        // Verify password
        if (password_verify($password, $hashed_password_db)) {
            // Password is correct, user is authenticated

            // Set session variables
            $_SESSION['user_id'] = $row["id"];
            $_SESSION['phone'] = $row["phone"];

            // Redirect to the homepage or any other authenticated page
            header("Location: /web/app/view/homepage.php");
            exit;
        } else {
            echo "Mật khẩu không đúng. Vui lòng thử lại.";
        }
    } else {
        echo "Số điện thoại không tồn tại. Vui lòng đăng ký.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
