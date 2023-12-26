<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $confirm_pass = filter_input(INPUT_POST, 'confirm_pass', FILTER_SANITIZE_STRING);
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Validate other form fields as needed

    // Check if passs match
    if ($pass != $confirm_pass) {
        echo "Mật khẩu không khớp. Vui lòng nhập lại.";
    } else {
        // Hash the pass using bcrypt
        $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

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

        // Check if the phone already exists
        $check_phone_query = $conn->prepare("SELECT id FROM users WHERE phone = ?");
        $check_phone_query->bind_param("s", $phone);

        // Check if prepare() was successful
        if (!$check_phone_query) {
            die("Prepare failed: " . $conn->error);
        }

        $check_phone_query->execute();
        $check_phone_result = $check_phone_query->get_result();

        if ($check_phone_result->num_rows > 0) {
            echo "Số điện thoại đã được sử dụng. Vui lòng nhập số khác.";
        } else {
            // Email is available, proceed with user registration

            // Use prepared statements to prevent SQL injection
            $insert_user_query = $conn->prepare("INSERT INTO users (pass, full_name, phone, email, type_id) VALUES (?, ?, ?, ?, 2)");

            // Check if prepare() was successful
            if (!$insert_user_query) {
                die("Prepare failed: " . $conn->error);
            }

            $insert_user_query->bind_param("ssss", $hashed_pass, $full_name, $phone, $email);

            // Execute the statement
            if ($insert_user_query->execute()) {
                echo "Đăng ký thành công! Welcome: " . $full_name;
            } else {
                echo "Đăng ký không thành công. Vui lòng thử lại.";
                // Optionally, you can output more details about the error for debugging:
                // echo "Error: " . $insert_user_query->error;
            }

            // Close the statement for inserting user
            $insert_user_query->close();
        }

        // Close the statement and connection for checking phone
        $check_phone_query->close();
        $conn->close();
    }
}
?>