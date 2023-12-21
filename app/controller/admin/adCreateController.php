<?php
// Extract parameters
$productName = isset($_GET['productName']) ? $_GET['productName'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
$stockQuantity = isset($_GET['stockQuantity']) ? $_GET['stockQuantity'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$imgLink = isset($_GET['imgLink']) ? $_GET['imgLink'] : '';
$discountPercentage = isset($_GET['discountPercentage']) ? $_GET['discountPercentage'] : '';
$discountStartDate = isset($_GET['discountStartDate']) ? $_GET['discountStartDate'] : '';
$discountEndDate = isset($_GET['discountEndDate']) ? $_GET['discountEndDate'] : '';
$description = isset($_GET['description']) ? $_GET['description'] : '';

// Database connection parameters (define these as constants)
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

// Prepare and execute SQL query with prepared statement
$stmt = $conn->prepare("INSERT INTO products (product_name, price, stock_quantity, imgLink, discount_percentage, discount_start_date, discount_end_date, description, category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $productName, $price, $stockQuantity, $imgLink, $discountPercentage, $discountStartDate, $discountEndDate, $description, $category);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
