<?php
// Get keyword sent from the client
$keyword = '%' . strtolower($_GET["keyword"]) . '%';

include '../model/connectdb.php';

$stmt = $conn->prepare($sql);

// Check if the statement is prepared successfully
if (!$stmt) {
    die("Error in statement preparation: " . $conn->error);
}

$stmt->bind_param("s", $keyword);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display product information in the template card
        echo '<a href="../../app/view/productitem.php?productID=' . $row['product_id'] . '" class="col-md-3 col-sm-6 col-xs-12 thumbnail">';
        echo '<img src="' . $row['imgLink'] . '" alt="" class="search__img">';
        echo '<div class="search__info">';
        echo '<span>';
        echo '<p class="product_name">' . $row['product_name'] . '</p>';
        // echo '<p class="description">' . $row['description'] . '</p>';

        // Format the price as an integer, separated by commas
        $formatted_price = number_format($row['price'], 0, ',', '.');
        echo '<p class="product_price">' . $formatted_price . ' đ</p>';
        echo '</span>';
        echo '<div>';
        // echo '<a href="link_to_your_product_page.php" class="btnOrder d-flex justify-content-center align-items-center text-decoration-none"><i class="ti-shopping-cart" style="color: black;"></i></a>';
        // echo '<span class="btnOrder d-flex justify-content-center align-items-center text-decoration-none"><i class="ti-shopping-cart" style="color: black;"></i></span>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }
} else {
    echo "0 results";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
