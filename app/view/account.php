<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="../../public/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89154cd7a2.js" crossorigin="anonymous"></script>
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/account.css">
    <!-- include header -->
    <?php

    include '../../resources/includes/headerLogged.php';

    ?>
</head>

<body>
    <div class="container">
        <h1>Account Information</h1>
        <div class="account-info">
            <label>Email:</label>
            <p>user@example.com</p>

            <label>Phone:</label>
            <p>123-456-7890</p>

            <label>Name:</label>
            <p>John Doe</p>
        </div>

        <form method="post" action="../controller/deleteAccountController.php">
            <input type="submit" name="delete_account" value="Delete Account">
        </form>
    </div>
</body>

</html>