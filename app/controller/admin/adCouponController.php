<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $couponCode = filter_input(INPUT_POST, 'coupon_code', FILTER_SANITIZE_STRING);
    $discountPercentage = filter_input(INPUT_POST, 'discount_percentage', FILTER_SANITIZE_STRING);
    $startDate = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING);
    $endDate = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "web";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO coupons (coupon_code, discount_percentage, start_date, end_date)
            VALUES ('" . $couponCode . "','" . $discountPercentage . "','" . $startDate . "','" . $endDate . "')";

    if ($conn->query($sql) === TRUE) {
        echo "Voucher đã được tạo thành công!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>