    <?php
    session_start();

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

    // In ra thông tin giỏ hàng dưới dạng JSON để sử dụng trong frontend (hoặc nơi khác cần thiết)
    echo json_encode($cartItems);
    ?>
