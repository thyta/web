<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'nameContact', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'telContact', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'emailContact', FILTER_SANITIZE_STRING);
    $question = filter_input(INPUT_POST, 'questionContact', FILTER_SANITIZE_STRING);

    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "web";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contacts (contact_name, contact_phone, contact_email, question)
            VALUES ('" . $name . "','" . $tel . "','" . $email . "','" . $question . "')";

    if ($conn->query($sql) === TRUE) {
        echo "The question was sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>