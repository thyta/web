<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['nameContact']);
    $phone = mysqli_real_escape_string($conn, $_POST['telContact']);
    $email = mysqli_real_escape_string($conn, $_POST['emailContact']);
    $question = mysqli_real_escape_string($conn, $_POST['questionContact']);

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

    $sql = "INSERT INTO product (contact_name, contact_phone, contact_email, question)
            VALUES ('" . $name . "','" . $phone . "','" . $email . "','" . $question . "')";

    if ($conn->query($sql) === TRUE) {
        echo "The question was sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    $conn->close();
?>
