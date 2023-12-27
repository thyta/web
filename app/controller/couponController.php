<?php
session_start();

class CheckoutController
{
    // Hàm để tính giá phải thanh toán dựa trên mã giảm giá
    public function calculateTotalPrice()
    {
        // Lấy tổng giá từ session
        $totalPrice = isset($_SESSION['totalPrice']) ? floatval($_SESSION['totalPrice']) : 0.0;

        // Kiểm tra xem có mã giảm giá được nhập không
        if (isset($_GET['coupon_code'])) {
            $couponCode = $_GET['coupon_code'];
            $discountPercentage = $this->getDiscountPercentage($couponCode);
            if ($discountPercentage > 0) {
                // Áp dụng giảm giá nếu mã hợp lệ
                $totalPrice -= $totalPrice * $discountPercentage / 100;
            }
        }

        // Trả về kết quả giảm giá và giá phải thanh toán
        return [
            'discount_percentage' => $discountPercentage,
            'total_price' => $totalPrice,
        ];
    }

    // Hàm để lấy giảm giá từ database dựa trên mã giảm giá
    private function getDiscountPercentage($couponCode)
    {
        // Kết nối đến database (thay thế thông tin kết nối của bạn)
        $conn = new mysqli("localhost", "root", "", "web");

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Chống SQL Injection
        $safeCouponCode = $conn->real_escape_string($couponCode);

        // Truy vấn database để lấy giảm giá từ mã giảm giá
        $query = "SELECT discount_percentage FROM coupons WHERE coupon_code = '$safeCouponCode' AND start_date <= CURDATE()";
        $result = $conn->query($query);

        // Xử lý kết quả
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $discountPercentage = floatval($row['discount_percentage']);

        } else {
            $discountPercentage = 0.0;
        }

        // Đóng kết nối database
        $conn->close();

        return $discountPercentage;
    }
}

// Sử dụng controller
$checkoutController = new CheckoutController();
$result = $checkoutController->calculateTotalPrice();

// Kết quả trả về
if ($result['discount_percentage'] > 0) {
    $_SESSION['final_price'] = $result['total_price'];
    echo "Giảm giá " . $result['discount_percentage'] . "% đã được áp dụng.<br>";
}
echo "Giá phải thanh toán: " . number_format($result['total_price'], 0, ',', '.') . ' VND';
?>
