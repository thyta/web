<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Validate other form fields as needed

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Mật khẩu không khớp. Vui lòng nhập lại.";
    } else {
        // Hash the password using bcrypt
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Database connection parameters
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "web";

        // Create connection
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Kết nối không thành công: " . $conn->connect_error);
        }

        // Check if the email already exists
        $check_email_query = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check_email_query->bind_param("s", $email);

        // Check if prepare() was successful
        if (!$check_email_query) {
            die("Prepare failed: " . $conn->error);
        }

        $check_email_query->execute();
        $check_email_result = $check_email_query->get_result();

        if ($check_email_result->num_rows > 0) {
            echo "Email đã được sử dụng. Vui lòng nhập email khác.";
        } else {
            // Email is available, proceed with user registration

            // Use prepared statements to prevent SQL injection
            $insert_user_query = $conn->prepare("INSERT INTO users (password, full_name, phone, email, type_id) VALUES (?, ?, ?, ?, 2)");

            // Check if prepare() was successful
            if (!$insert_user_query) {
                die("Prepare failed: " . $conn->error);
            }

            $insert_user_query->bind_param("ssss", $hashed_password, $full_name, $phone, $email);

            // Execute the statement
            if ($insert_user_query->execute()) {
                echo "Đăng ký thành công! Email: " . $email;
            } else {
                echo "Đăng ký không thành công. Vui lòng thử lại.";
                // Optionally, you can output more details about the error for debugging:
                // echo "Error: " . $insert_user_query->error;
            }

            // Close the statement for inserting user
            $insert_user_query->close();
        }

        // Close the statement and connection for checking email
        $check_email_query->close();
        $conn->close();
    }
}
?>
