<?php
$servername = "us-cluster-east-01.k8s.cleardb.net";
$username = "b5f417f880e6cf";
$password = "f7fec413";
$database = "heroku_6853f831c061b28";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL code to execute
$sql = "
    CREATE DATABASE IF NOT EXISTS web;
    USE web;

    CREATE TABLE IF NOT EXISTS user_types (
        type_id INT PRIMARY KEY AUTO_INCREMENT,
        type_name VARCHAR(50) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        phone VARCHAR(20) NOT NULL,
        password VARCHAR(255) NOT NULL,
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        type_id INT,
        FOREIGN KEY (type_id) REFERENCES user_types(type_id)
    );

    CREATE TABLE IF NOT EXISTS products (
        product_id INT PRIMARY KEY AUTO_INCREMENT,
        product_name VARCHAR(255) NOT NULL,
        description TEXT,
        price DECIMAL(10, 2) NOT NULL,
        stock_quantity INT NOT NULL,
        sold_quantity INT NOT NULL,
        category_id INT,
        imgLink VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        discount_percentage DECIMAL(5, 2),
        discount_start_date DATE,
        discount_end_date DATE,
        status_product BOOLEAN DEFAULT 1,
        FOREIGN KEY (category_id) REFERENCES categories(category_id)
    );

    CREATE TABLE IF NOT EXISTS categories (
        category_id INT PRIMARY KEY AUTO_INCREMENT,
        category_name VARCHAR(50) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS coupons (
        coupon_id INT PRIMARY KEY AUTO_INCREMENT,
        coupon_code VARCHAR(255) NOT NULL,
        discount_percentage DECIMAL(5, 2) NOT NULL,
        start_date DATE NOT NULL,
        end_date DATE NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );

    CREATE TABLE IF NOT EXISTS order_statuses (
        status_id INT PRIMARY KEY AUTO_INCREMENT,
        status_name VARCHAR(50) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS payment_methods (
        payment_id INT PRIMARY KEY AUTO_INCREMENT,
        payment_name VARCHAR(50) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS orders (
        order_id VARCHAR(25) NOT NULL PRIMARY KEY,
        user_id INT NOT NULL,
        total_price DECIMAL(10, 2) NOT NULL,
        order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        address_order TEXT NOT NULL,
        status_id INT NOT NULL DEFAULT 1,
        payment_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (status_id) REFERENCES order_statuses(status_id)
    );

    CREATE TABLE IF NOT EXISTS order_items (
        order_id VARCHAR(25) NOT NULL,
        product_id INT NOT NULL,
        quantity INT NOT NULL,
        total_amount DECIMAL(10, 2) NOT NULL,
        PRIMARY KEY (order_id, product_id),
        FOREIGN KEY (order_id) REFERENCES orders(order_id),
        FOREIGN KEY (product_id) REFERENCES products(product_id)
    );

    -- USE web;

    INSERT INTO
        user_types (type_name)
    VALUES
        ('admin'),
        ('user');

    -- Thêm dữ liệu vào bảng order_statuses
    INSERT INTO
        order_statuses (status_name)
    VALUES
        ('Chờ'),
        ('Xác nhận'),
        ('Huỷ');

    -- Thêm dữ liệu vào bảng payment
    INSERT INTO
        payment_methods (payment_name)
    VALUES
        ('COD'),
        ('MOMO'),
        ('Bank');

    INSERT INTO
        `categories` (`category_id`, `category_name`)
    VALUES
        (1, 'Chăm sóc da'),
        (2, 'Chăm sóc tóc'),
        (3, 'Combo sản phẩm'),
        (4, 'Dưỡng môi'),
        (5, 'Tắm và dưỡng thể');

    INSERT INTO
        `coupons` (
            `coupon_id`,
            `coupon_code`,
            `discount_percentage`,
            `start_date`,
            `end_date`,
            `created_at`,
            `updated_at`
        )
    VALUES
        (
            1,
            'COUPON10',
            '10.00',
            '2023-01-01',
            '2023-12-31',
            '2023-12-28 16:31:07',
            '2023-12-28 16:31:07'
        ),
        (
            2,
            'SUMMER20',
            '20.00',
            '2023-06-01',
            '2023-08-31',
            '2023-12-28 16:31:08',
            '2023-12-28 16:31:08'
        ),
        (
            3,
            'SPRING15',
            '15.50',
            '2023-03-15',
            '2023-04-15',
            '2023-12-28 16:31:08',
            '2023-12-28 16:31:08'
        );

    INSERT INTO
        `orders` (
            `order_id`,
            `user_id`,
            `total_price`,
            `order_date`,
            `address_order`,
            `status_id`,
            `payment_id`
        )
    VALUES
        (
            '658da2f00aa52',
            10,
            '843655.50',
            '2023-12-28 16:31:44',
            'Tỉnh Tiền Giang - Huyện Chợ Gạo - Xã An Thạnh Thủy - số 42',
            1,
            2
        );

    INSERT INTO
        `order_items` (
            `order_id`,
            `product_id`,
            `quantity`,
            `total_amount`
        )
    VALUES
        ('658da2f00aa52', 53, 1, '0.00'),
        ('658da2f00aa52', 1, 1, '145000.00'),
        ('658da2f00aa52', 3, 1, '295000.00'),
        ('658da2f00aa52', 4, 3, '497250.00');

    INSERT INTO
        `users` (
            `id`,
            `phone`,
            `password`,
            `full_name`,
            `email`,
            `type_id`
        )
    VALUES
        (
            1,
            '0987814172',
            '$2y$10$rGnYG5uR1zjPdNcaO8cm5uq32R2AHAwcK9olzTsj/yW7NMPlky/8e',
            'Tran Anh Thy',
            'anhthy18072003.tran@gmail.com',
            1
        );
";

// Execute SQL code
if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

// Close connection
$conn->close();

?>