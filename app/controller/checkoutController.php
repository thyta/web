<?php
session_start();

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

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit;
}

// Get user information from session
$user_id = $_SESSION['user_id'];
$full_name = $_SESSION['full_name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];

// Get other information from the checkout form using $_GET
$addressPayment = $_GET['homeAddress'];

$paymentMethod = $_GET['paymentMethod'];

$final_price = $_SESSION['final_price'];

// Lấy giỏ hàng từ cookie (nếu có)
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

// Tạo một mảng để lưu thông tin sản phẩm và số lượng
$cartItems = [];

// Lặp qua giỏ hàng và lưu thông tin cần thiết vào mảng $cartItems
foreach ($cart as $productID => $productInfo) {
    $cartItems[] = [
        'id' => $productID,
        'quantity' => $productInfo['quantity'],
    ];
}

// Tạo một transaction để đảm bảo tính toàn vẹn của dữ liệu
$conn->begin_transaction();

try {
    // Thêm thông tin vào bảng orders
    $order_id = uniqid(); // Tạo một mã đơn hàng duy nhất
    $insertOrderQuery = "INSERT INTO orders (order_id, user_id, total_price, address_order, status_id, payment_id) 
                         VALUES ('$order_id', $user_id, $final_price, '$addressPayment', 1, $paymentMethod)";
    $conn->query($insertOrderQuery);

    // Thêm thông tin vào bảng order_items
    foreach ($cartItems as $item) {
        $productID = $item['id'];
        $quantity = $item['quantity'];
        
        // Lấy thông tin giá của sản phẩm từ cơ sở dữ liệu (chưa biết cấu trúc của bảng products)
        // Giả sử bạn có một bảng products với trường product_id và price
        $getProductPriceQuery = "SELECT price FROM products WHERE product_id = $productID";
        $result = $conn->query($getProductPriceQuery);
        $productPrice = $result->fetch_assoc()['price'];

        $totalAmount = $productPrice * $quantity;

        $insertOrderItemQuery = "INSERT INTO order_items (order_id, product_id, quantity, total_amount) 
                                 VALUES ('$order_id', $productID, $quantity, $totalAmount)";
        $conn->query($insertOrderItemQuery);
    }

    // Commit transaction nếu mọi thứ diễn ra suôn sẻ
    $conn->commit();

    // Xóa giỏ hàng sau khi đặt hàng thành công
    setcookie('cart', '', time() - 1, "/");
    exit;
} catch (Exception $e) {
    // Nếu có lỗi xảy ra, rollback transaction để không thay đổi cơ sở dữ liệu
    $conn->rollback();
    echo "Error placing order: " . $e->getMessage();
}

// Đóng kết nối
$conn->close();
?>
