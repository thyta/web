<?php
include 'connectdb.php';

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT category_name, category_id FROM categories";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="form-group">';
    echo '<label for="category">Phân loại:</label>';
    echo '<select id="category" name="category" class="form-control">';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["category_id"] . '">' . $row["category_name"] . '</option>';
    }
    echo '</select>';
    echo '</div>';
} else {
    echo "0 results";
}

// close connection
$conn->close();
?>