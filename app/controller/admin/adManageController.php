<?php

try {
    // Get keyword sent from the client
    $page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;

    // Assuming you want to fetch 10 rows at a time, starting from (page_-1)*10
    $offset = ($page - 1) * 10; // Assuming you want 10 records per page

    $sql = "SELECT * FROM products a INNER JOIN categories b 
            ON a.category_id = b.category_id
            ORDER BY product_id ASC
            LIMIT $offset, 10";

    $sql_per_page = "SELECT COUNT(*) AS count FROM products";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);
    $result_per_page = $conn->query($sql_per_page);

    if ($result_per_page) {
        $row_per_page = $result_per_page->fetch_assoc();
        $total_products = $row_per_page["count"];
        $products_per_page = 10;
        $total_pages = ceil($total_products / $products_per_page);

        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Echo HTML structure based on the fetched data
                    echo "<tr>";
                    echo "<td>" . $row["product_id"] . "</td>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td>" . $row["category_name"] . "</td>";
                    echo "<td class='actions'>";
                    echo "<a class='btn' href='../../view/adminView/adUpdate.php?id=" . $row["product_id"] . "'>Update</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
        } else {
            throw new Exception("Error: " . $conn->error);
        }
    } else {
        throw new Exception("Error: " . $conn->error);
    }

    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>