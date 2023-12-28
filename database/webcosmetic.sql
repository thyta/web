-- CREATE DATABASE web;
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

-- vouncher discont
CREATE TABLE IF NOT EXISTS coupons (
    coupon_id INT PRIMARY KEY AUTO_INCREMENT,
    coupon_code VARCHAR(255) NOT NULL,
    discount_percentage DECIMAL(5, 2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

USE web;

-- BẢNG LIÊN HỆ CỦA BIN, ĐỪNG ĐỤNG DÔ T CHẶT TAY
CREATE TABLE IF NOT EXISTS `contacts` (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    contact_name VARCHAR(255) NOT NULL,
    contact_phone VARCHAR(20) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    question TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Checkout
-- Tạo bảng order_statuses
-- Tạo bảng order_statuses
CREATE TABLE IF NOT EXISTS order_statuses (
    -- 1: wait; 2: confirm; 3: cancel
    status_id INT PRIMARY KEY AUTO_INCREMENT,
    status_name VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS payment_methods (
    -- 1: cod; 2: momo; 3: bank
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    payment_name VARCHAR(50) NOT NULL
);

-- Tạo bảng orders
CREATE TABLE IF NOT EXISTS orders (
    order_id VARCHAR(25) NOT NULL PRIMARY KEY,
    user_id INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    address_order TEXT NOT NULL,
    status_id INT NOT NULL DEFAULT 1,
    payment_id INT NOT NULL,
    -- Mặc định là 1 (wait)
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (status_id) REFERENCES order_statuses(status_id)
);

-- Tạo bảng order_items để lưu chi tiết sản phẩm trong mỗi đơn hàng
CREATE TABLE IF NOT EXISTS order_items (
    order_id VARCHAR(25) NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);