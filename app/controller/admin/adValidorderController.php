<?php

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Câu truy vấn SQL để lấy các đơn hàng có trạng thái chờ (status_id = 1)
$sql = "SELECT * FROM orders WHERE status_id = 1";
$result = $conn->query($sql);

// Kiểm tra nếu có kết quả trả về
if ($result->num_rows > 0) {

    // In dữ liệu từ các đơn hàng
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["order_id"] . "</td>";
        echo "<td>" . $row["total_price"] . "</td>";
        echo "<td class='actions'>";
        echo "<a class='btn' href='../../controller/admin/adOrderAction.php?action=confirm&order_id=" . $row["order_id"] . "'>Xác nhận đơn hàng</a>";
        echo "<a class='btn' href='../../controller/admin/adOrderAction.php?action=cancel&order_id=" . $row["order_id"] . "'>Hủy đơn hàng</a>";
        echo "</td>";
        echo "</tr>";
    }

    // Đóng bảng
    echo "</table>";
} else {
    // Hiển thị thông báo nếu không có đơn hàng nào
    echo "Không có đơn hàng chờ.";
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
