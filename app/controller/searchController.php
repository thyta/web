<?php
//Get keyword sent from client
$keyword = '%' . strtolower($_GET["keyword"]) . '%';

//Execute SQL using prepared statement
$sql = "SELECT * FROM products WHERE LOWER(product_name) LIKE ?";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $keyword);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    //Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Hiển thị thông tin sản phẩm trong card mẫu
        echo '<div class="col-md-3 col-sm-6 col-xs-12 thumbnail">';
        echo '<img src="' . $row['imgLink'] . '" alt="" class="search__img">';
        echo '<div class="search__info">';
        echo '<div>';
        echo '<p class="product_name">' . $row['product_name'] . '</p>';
        // echo '<p class="description">' . $row['description'] . '</p>';
        
        // Format giá thành số nguyên, ngăn cách bằng dấu ","
        $formatted_price = number_format($row['price'], 0, ',', '.');
        echo '<p class="product_price">' . $formatted_price . ' đ</p>';
        
        echo '</div>';
        echo '<div>';
        // echo '<a href="link_to_your_product_page.php" class="btnOrder d-flex justify-content-center align-items-center text-decoration-none"><i class="ti-shopping-cart" style="color: black;"></i></a>';
        echo '<a href="../../app/view/productitem.php?productID=' . $row['product_id'] . '" class="btnOrder d-flex justify-content-center align-items-center text-decoration-none"><i class="ti-shopping-cart" style="color: black;"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>