<?php
//Get keyword sent from client
$keyword = $_GET["keyword"];

//Execute SQL
$sql = "SELECT * FROM products WHERE product_name LIKE '%" . $keyword . "%';";
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

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    while ($row = $result->fetch_assoc()) {
        //Return result back to client
        echo '<div class="col-md-3 col-sm-6 col-xs-12 thumbnail">
        <img src="../../public/img/best-saler-11.jpg" alt="" class="search__img">
        <div class="search__info">
            <div class="info__container">
                <p class="product_name">' . $row['product_name'] . '</p>
                <p class="description">' . $row['description'] . '</p>
                <p class="product_price">' . $row['price'] . ' đ' .'</p>
            </div>
            <div>
                <button type="buton" class="btnOrder"><i class="ti-shopping-cart"></i></button>
            </div>
        </div>
    </div>';
    }
} else {
    echo "0 results";
}
$conn->close();

?>
