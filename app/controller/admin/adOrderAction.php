<?php

try {
    // Đường dẫn đến tệp autoload.php của PHPMailer (nếu bạn sử dụng Composer)
    require '../../../vendor/autoload.php';

    // Tạo một đối tượng PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // Thiết lập chế độ debug (0: không hiển thị, 2: hiển thị thông báo lỗi)
    $mail->SMTPDebug = 0;

    // Sử dụng giao thức SMTP
    $mail->isSMTP();

    // Thiết lập máy chủ SMTP của Google
    $mail->Host = 'smtp.gmail.com';

    // Thiết lập cổng SMTP (cổng 587 thường được sử dụng cho TLS)
    $mail->Port = 587;

    // Bật sử dụng TLS
    $mail->SMTPSecure = 'tls';

    // Bật chế độ xác thực SMTP
    $mail->SMTPAuth = true;

    // Đặt địa chỉ email người gửi
    $mail->Username = '21521517@gm.uit.edu.vn';

    // Đặt mật khẩu của tài khoản email
    $mail->Password = 'taThy2003@';

    // Đặt tên người gửi
    $mail->setFrom('21521517@gm.uit.edu.vn', 'ThyAnh');




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
        if ($action == 'confirm') {
            // Update order status to 'Confirmed'
            $updateQuery = "UPDATE orders SET status_id = 2 WHERE order_id = '$order_id'";
            $conn->query($updateQuery);

            // Get order details from the database
            $selectOrderQuery = "SELECT orders.*, users.email as customer_email FROM orders
                JOIN users ON orders.user_id = users.id
                WHERE orders.order_id = '$order_id'";
            $result = $conn->query($selectOrderQuery);
            $order = $result->fetch_assoc();

            // Get order items from the database
            $selectOrderItemsQuery = "SELECT * FROM order_items WHERE order_id = '$order_id'";
            $resultItems = $conn->query($selectOrderItemsQuery);

            // Đặt địa chỉ email người nhận
            $mail->addAddress('anhthy18072003.tran@gmail.com', 'Daniis Axelor');
            // Đặt chủ đề
            $mail->Subject = 'Xac nhan don hang';

            // Đặt nội dung email
            $mail->Body = "
                <p>Xin chào</p>
                <p>Cảm ơn bạn đã đặt hàng từ chúng tôi. Dưới đây là xác nhận đơn hàng của bạn:</p>
                
                <h3>Chi tiết đơn hàng:</h3>
            ";

            while ($item = $resultItems->fetch_assoc()) {
                $mail->Body .= "
                    <p>Sản phẩm: {$item['product_id']} - Số lượng: {$item['quantity']}</p>
                ";
            }

            $mail->Body .= "
                <p>Cảm ơn bạn đã lựa chọn chúng tôi. Chúng tôi sẽ thông báo cho bạn khi đơn hàng của bạn đã được gửi đi.</p>
                
                <p>Trân trọng,</p>
            ";

            // Thiết lập định dạng email là HTML
            $mail->isHTML(true);

            // Gửi email
            if (!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

            echo "Order confirmed successfully.";
        } else if ($action == 'cancel') {
            // Update order status to 'Canceled'
            $updateQuery = "UPDATE orders SET status_id = 3 WHERE order_id = '$order_id'";
            $conn->query($updateQuery);

            // Get order details from the database
            $selectOrderQuery = "SELECT orders.*, users.full_name as customer_name, users.email as customer_email FROM orders
                JOIN users ON orders.user_id = users.id
                WHERE orders.order_id = '$order_id'";
            $result = $conn->query($selectOrderQuery);
            $order = $result->fetch_assoc();

            // Get order items from the database
            $selectOrderItemsQuery = "SELECT * FROM order_items WHERE order_id = '$order_id'";
            $resultItems = $conn->query($selectOrderItemsQuery);
            // Đặt địa chỉ email người nhận

            // Đặt địa chỉ email người nhận
            $mail->addAddress('anhthy18072003.tran@gmail.com', 'Daniis Axelor');
            // Đặt chủ đề
            $mail->Subject = 'Huy don hang';

            // Đặt nội dung email
            $mail->Body = "
                <p>Xin chào</p>
                <p>Chúng tôi rất tiếc thông báo rằng đơn hàng của bạn đã bị hủy.</p>
    
                <h3>Thông tin đơn hàng:</h3>
                
                <h3>Chi tiết đơn hàng:</h3>
            ";

            while ($item = $resultItems->fetch_assoc()) {
                $mail->Body .= "
                    <p>Sản phẩm: {$item['product_id']} - Số lượng: {$item['quantity']}</p>
                ";
            }

            $mail->Body .= "
                <p>Nếu có bất kỳ câu hỏi hoặc cần hỗ trợ thêm, vui lòng liên hệ chúng tôi.</p>
                
                <p>Xin lỗi vì sự bất tiện này và chúng tôi hy vọng có cơ hội phục vụ bạn trong tương lai.</p>
                
                <p>Trân trọng,</p>
            ";

            // Thiết lập định dạng email là HTML
            $mail->isHTML(true);

            // Gửi email
            if (!$mail->send()) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

            echo "Order confirmed successfully.";
        }

        $conn->close();
    } else {
        echo "Action or order_id not provided.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>