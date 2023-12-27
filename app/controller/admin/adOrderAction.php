<?php

try {
    // Check if the action and order_id parameters are set
    if (isset($_GET['action']) && isset($_GET['order_id'])) {
        $action = $_GET['action'];
        $order_id = $_GET['order_id']; 

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

        // Perform the action based on the request
        switch ($action) {
            case 'confirm':
                // Implement logic to confirm the order
                // For example, you can update the status_id in the orders table
                $updateQuery = "UPDATE orders SET status_id = 2 WHERE order_id = '$order_id'";
                $conn->query($updateQuery);
                echo "Order confirmed successfully.";
                break;

            case 'cancel':
                // Implement logic to cancel the order
                // For example, you can update the status_id in the orders table
                $updateQuery = "UPDATE orders SET status_id = 3 WHERE order_id = '$order_id'";
                $conn->query($updateQuery);
                echo "Order canceled successfully.";
                break;

            default:
                echo "Invalid action.";
                break;
        }

        $conn->close();
    } else {
        echo "Action or order_id not provided.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
