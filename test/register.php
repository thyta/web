<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Đăng ký tài khoản</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Đăng ký tài khoản</title>

        <style>
            /* Your existing styles here */
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Thêm người dùng</h2>
            <form action="registerController.php" method="post">
                <label for="phone">Số điện thoại:</label>
                <input type="phone" id="phone" name="phone" required>

                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <label for="full_name">Họ và tên:</label>
                <input type="text" id="full_name" name="full_name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit">Thêm người dùng</button>
            </form>
        </div>
    </body>

    </html>

</body>

</html>