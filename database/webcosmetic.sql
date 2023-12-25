<<<<<<< HEAD
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
    status_product BOOLEAN,
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
=======
USE web;

CREATE TABLE IF NOT EXISTS `contacts` (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    contact_name VARCHAR(255) NOT NULL,
    contact_phone VARCHAR(20) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    question TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
>>>>>>> 2e052a6f809aee7679cc13b20e0fc6137ad1efa1
