<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
}

$action = isset($_GET['action']) && !empty($_GET['action']) ? $_GET['action'] : null;

if ($action == "add") {
    if (isset($_GET['productID'])) {
        $productID = $_GET['productID'];

        // Kiểm tra xem $productID có phải là số hợp lệ không
        if (!is_numeric($productID)) {
            echo "ID sản phẩm không hợp lệ.";
            exit; // Dừng việc thực thi
        }

        // Lấy giỏ hàng từ cookie (nếu có)
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (isset($cart[$productID]) && is_array($cart[$productID])) {
            // Nếu tồn tại và là mảng, tăng số lượng lên 1
            $cart[$productID]['quantity'] += 1;
        } else {
            // Nếu chưa tồn tại hoặc không phải là mảng, thực hiện truy vấn để lấy thông tin sản phẩm từ cơ sở dữ liệu
            $sql = "SELECT * FROM products WHERE product_id = $productID";
            $result = $conn->query($sql);

            if (!$result) {
                throw new Exception("Error in SQL query: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                // Lấy thông tin sản phẩm từ kết quả truy vấn
                $productInfo = $result->fetch_assoc();

                // Thêm thông tin sản phẩm vào giỏ hàng
                $cart[$productID] = [
                    'id' => $productID,
                    'name' => $productInfo['product_name'],
                    'price' => $productInfo['price'],
                    'imgLink' => $productInfo['imgLink'],
                    'quantity' => 1,
                ];
            } else {
                // Không tìm thấy thông tin sản phẩm
                echo "Không tìm thấy thông tin sản phẩm.";
            }
        }

        // Lưu giỏ hàng mới vào cookie
        setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // Cookie tồn tại trong 30 ngày

        // In ra giỏ hàng
        $totalPrice = 0; // Khởi tạo biến tổng giá
        // Tính tổng giá
        foreach ($cart as $productID => $productInfo) {
            $totalPrice += $productInfo['price'] * $productInfo['quantity'];
        }

        echo '<div class="text-right" style="margin-right:35px">';
        echo '<button class="btn btn-danger clear_cart">Xoá giỏ hàng</button>';
        echo '</div>';
        echo '<table class="single-product-cart" style="width:100%;">';
        echo '<thead class="text-muted"><tr><th scope="col" width="20%"></th><th scope="col" width="60%"></th><th scope="col" width="20%" class="text-right"> </th></tr></thead>';
        echo '<tbody>';
        foreach ($cart as $productID => $productInfo) {
            echo '<tr class="tr-cart">';
            echo '<td><img class="img-cart" src="' . $productInfo['imgLink'] . '" alt="' . $productInfo['name'] . '"></td>';
            echo '<td>';
            echo '<div class="cart-name"><p>' . $productInfo['name'] . '</p></div>';
            echo '<div class="cart__quantity">';
            echo '<button class="btn cart-btn decrease_cart" data-productid="' . $productID . '" onclick="decreaseQuantity(\'quantity' . $productID . '\')">-</button>';
            echo '<input class="cart-quantity" type="text" id="quantity' . $productID . '" value="' . $productInfo['quantity'] . '" readonly>';
            echo '<button class="btn cart-btn increase_cart" data-productid="' . $productID . '" onclick="increaseQuantity(\'quantity' . $productID . '\')">+</button>';
            echo '</div>';
            echo '</td>';
            echo '<td>';
            echo '<button class="btn btn-block cart-btn remove_cart" data-productid="' . $productID . '">X</button>';
            echo '<div>' . $productInfo['price'] . ' đ</div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '<div class="text-right" style="margin-right:35px">';
        echo '<div class="total-price font-weight-bold" style="font-size: 20px">Tổng giá: ' . number_format($totalPrice) . ' vnđ</div>';
        echo '</div>';
    } else {
        // Thiếu productID, xử lý lỗi
        echo "Thiếu ID sản phẩm cho hành động addToCart.";
    }
} else if ($action == "decrease") {
    if (isset($_GET['productID'])) {
        $productID = $_GET['productID'];

        // Kiểm tra xem $productID có phải là số hợp lệ không
        if (!is_numeric($productID)) {
            echo "ID sản phẩm không hợp lệ.";
            exit; // Dừng việc thực thi
        }

        // Lấy giỏ hàng từ cookie (nếu có)
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if (isset($cart[$productID]) && is_array($cart[$productID])) {
            // Giảm số lượng sản phẩm đi 1 đơn vị
            $cart[$productID]['quantity']--;

            // Kiểm tra nếu số lượng sản phẩm nhỏ hơn hoặc bằng 0 thì xoá khỏi giỏ hàng
            if ($cart[$productID]['quantity'] <= 0) {
                unset($cart[$productID]);
            }

            // Lưu giỏ hàng mới vào cookie
            setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // Cookie tồn tại trong 30 ngày

            // In ra giỏ hàng
            $totalPrice = 0; // Khởi tạo biến tổng giá
            // Tính tổng giá
            foreach ($cart as $productID => $productInfo) {
                $totalPrice += $productInfo['price'] * $productInfo['quantity'];
            }

            echo '<div class="text-right" style="margin-right:35px">';
            echo '<button class="btn btn-danger clear_cart">Xoá giỏ hàng</button>';
            echo '</div>';
            echo '<table class="single-product-cart" style="width:100%;">';
            echo '<thead class="text-muted"><tr><th scope="col" width="20%"></th><th scope="col" width="60%"></th><th scope="col" width="20%" class="text-right"> </th></tr></thead>';
            echo '<tbody>';
            foreach ($cart as $productID => $productInfo) {
                echo '<tr class="tr-cart">';
                echo '<td><img class="img-cart" src="' . $productInfo['imgLink'] . '" alt="' . $productInfo['name'] . '"></td>';
                echo '<td>';
                echo '<div class="cart-name"><p>' . $productInfo['name'] . '</p></div>';
                echo '<div class="cart__quantity">';
                echo '<button class="btn cart-btn decrease_cart" data-productid="' . $productID . '" onclick="decreaseQuantity(\'quantity' . $productID . '\')">-</button>';
                echo '<input class="cart-quantity" type="text" id="quantity' . $productID . '" value="' . $productInfo['quantity'] . '" readonly>';
                echo '<button class="btn cart-btn increase_cart" data-productid="' . $productID . '" onclick="increaseQuantity(\'quantity' . $productID . '\')">+</button>';
                echo '</div>';
                echo '</td>';
                echo '<td>';
                echo '<button class="btn btn-block cart-btn remove_cart" data-productid="' . $productID . '">X</button>';
                echo '<div>' . $productInfo['price'] . ' đ</div>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '<div class="text-right" style="margin-right:35px">';
            echo '<div class="total-price font-weight-bold" style="font-size: 20px">Tổng giá: ' . number_format($totalPrice) . ' vnđ</div>';
            echo '</div>';
        } else {
            // Không tìm thấy sản phẩm trong giỏ hàng
            echo "Sản phẩm không tồn tại trong giỏ hàng.";
        }
    } else {
        // Thiếu productID, xử lý lỗi
        echo "Thiếu ID sản phẩm cho hành động decrease.";
    }
} else if ($action == "remove") {
    if (isset($_GET['productID'])) {
        $productID = $_GET['productID'];

        // Kiểm tra xem $productID có phải là số hợp lệ không
        if (!is_numeric($productID)) {
            echo "ID sản phẩm không hợp lệ.";
            exit; // Dừng việc thực thi
        }

        // Lấy giỏ hàng từ cookie (nếu có)
        $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if (isset($cart[$productID]) && is_array($cart[$productID])) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($cart[$productID]);

            // Lưu giỏ hàng mới vào cookie
            setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // Cookie tồn tại trong 30 ngày

            // In ra giỏ hàng
            $totalPrice = 0; // Khởi tạo biến tổng giá
            // Tính tổng giá
            foreach ($cart as $productID => $productInfo) {
                $totalPrice += $productInfo['price'] * $productInfo['quantity'];
            }

            echo '<div class="text-right" style="margin-right:35px">';
            echo '<button class="btn btn-danger clear_cart">Xoá giỏ hàng</button>';
            echo '</div>';
            echo '<table class="single-product-cart" style="width:100%;">';
            echo '<thead class="text-muted"><tr><th scope="col" width="20%"></th><th scope="col" width="60%"></th><th scope="col" width="20%" class="text-right"> </th></tr></thead>';
            echo '<tbody>';
            foreach ($cart as $productID => $productInfo) {
                echo '<tr class="tr-cart">';
                echo '<td><img class="img-cart" src="' . $productInfo['imgLink'] . '" alt="' . $productInfo['name'] . '"></td>';
                echo '<td>';
                echo '<div class="cart-name"><p>' . $productInfo['name'] . '</p></div>';
                echo '<div class="cart__quantity">';
                echo '<button class="btn cart-btn decrease_cart" data-productid="' . $productID . '" onclick="decreaseQuantity(\'quantity' . $productID . '\')">-</button>';
                echo '<input class="cart-quantity" type="text" id="quantity' . $productID . '" value="' . $productInfo['quantity'] . '" readonly>';
                echo '<button class="btn cart-btn increase_cart" data-productid="' . $productID . '" onclick="increaseQuantity(\'quantity' . $productID . '\')">+</button>';
                echo '</div>';
                echo '</td>';
                echo '<td>';
                echo '<button class="btn btn-block cart-btn remove_cart" data-productid="' . $productID . '">X</button>';
                echo '<div>' . $productInfo['price'] . ' đ</div>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '<div class="text-right" style="margin-right:35px">';
            echo '<div class="total-price font-weight-bold" style="font-size: 20px">Tổng giá: ' . number_format($totalPrice) . ' vnđ</div>';
            echo '</div>';
        } else {
            // Không tìm thấy sản phẩm trong giỏ hàng
            echo "Sản phẩm không tồn tại trong giỏ hàng.";
        }
    } else {
        // Thiếu productID, xử lý lỗi
        echo "Thiếu ID sản phẩm cho hành động remove.";
    }
} else if ($action == "clear") {
    // Xóa toàn bộ giỏ hàng
    setcookie('cart', '', time() - 1, "/"); // Hủy cookie giỏ hàng

    // In ra thông báo
    echo '<div class="cart-empty__body">';
    echo '<div class="title link__pc--wb">OOPSS</div>';
    echo '<div class="message link__pc--wb">Giỏ hàng hiện đang trống <br>';
    echo 'Không có sản phẩm nào trong <br>';
    echo 'giỏ của bạn</div>';
    echo '<a href="" class="button">TIẾP TỤC MUA SẮM</a>';
    echo '</div>';
} else if ($action == "load") {
    // In ra nội dung của giỏ hàng
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    if (!empty($cart)) {
        $totalPrice = 0; // Khởi tạo biến tổng giá
        // Tính tổng giá
        foreach ($cart as $productID => $productInfo) {
            $totalPrice += $productInfo['price'] * $productInfo['quantity'];
        }

        echo '<div class="text-right" style="margin-right:35px">';
        echo '<button class="btn btn-danger clear_cart">Xoá giỏ hàng</button>';
        echo '</div>';
        echo '<table class="single-product-cart" style="width:100%;">';
        echo '<thead class="text-muted"><tr><th scope="col" width="20%"></th><th scope="col" width="60%"></th><th scope="col" width="20%" class="text-right"> </th></tr></thead>';
        echo '<tbody>';
        foreach ($cart as $productID => $productInfo) {
            echo '<tr class="tr-cart">';
            echo '<td><img class="img-cart" src="' . $productInfo['imgLink'] . '" alt="' . $productInfo['name'] . '"></td>';
            echo '<td>';
            echo '<div class="cart-name"><p>' . $productInfo['name'] . '</p></div>';
            echo '<div class="cart__quantity">';
            echo '<button class="btn cart-btn decrease_cart" data-productid="' . $productID . '" onclick="decreaseQuantity(\'quantity' . $productID . '\')">-</button>';
            echo '<input class="cart-quantity" type="text" id="quantity' . $productID . '" value="' . $productInfo['quantity'] . '" readonly>';
            echo '<button class="btn cart-btn increase_cart" data-productid="' . $productID . '" onclick="increaseQuantity(\'quantity' . $productID . '\')">+</button>';
            echo '</div>';
            echo '</td>';
            echo '<td>';
            echo '<button class="btn btn-block cart-btn remove_cart" data-productid="' . $productID . '">X</button>';
            echo '<div>' . $productInfo['price'] . ' đ</div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '<div class="text-right" style="margin-right:35px">';
        echo '<div class="total-price font-weight-bold" style="font-size: 20px">Tổng giá: ' . number_format($totalPrice) . ' vnđ</div>';
        echo '</div>';
    } else {
        echo '<div class="cart-empty__body">';
        echo '<div class="title link__pc--wb">OOPSS</div>';
        echo '<div class="message link__pc--wb">Giỏ hàng hiện đang trống <br>';
        echo 'Không có sản phẩm nào trong <br>';
        echo 'giỏ của bạn</div>';
        echo '<a href="" class="button">TIẾP TỤC MUA SẮM</a>';
        echo '</div>';
    }
} else {
    // Hành động không hợp lệ, xử lý lỗi
    echo "Hành động không hợp lệ.";
}

// Đóng kết nối
$conn->close();
?>