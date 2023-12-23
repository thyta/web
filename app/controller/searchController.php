<?php
//Get keyword sent from client
$keyword = $_GET["keyword"];

//Execute SQL
$sql = "SELECT * FROM product WHERE ProductName LIKE '%" . $keyword . "%';";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dealcongnghe";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    while ($row = $result->fetch_assoc()) {
        //Return result back to client
        $regular_price = number_format($row["RegularPrice"], 0, '', ',') . '<sup>đ</sup>';
        $sale_price = number_format($row["SalePrice"], 0, '', ',') . '<sup>đ</sup>';
        echo '<div class= "col-md-3 col-sm-6 col-xs-12 thumbnail">';
        echo '<img class="img-responsive" src="' . $row['ImageLink'] . '">';
        echo '<h6>' . $row['ProductName'] . '</h6>';
        echo '<p>' . $sale_price . '<s>' . $regular_price . '</s></p>';
        echo '<a href="' . $row['ProductLink'] . '" class="btn btn-danger">Buy Now</a>';
        echo '</div>';  
    }
} else {
    echo "0 results";
}
$conn->close();

?>