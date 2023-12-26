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
    session_start();
    include '../../resources/includes/headerLogged.php';
    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users where id = $id";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";


    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    ?>
</head>

<body>
    <div>
        <h3 class="account__title">TÀI KHOẢN</h3>
    </div>
    <div class="account__container">
        <h4 class="person__email"><i data-feather="user" class="person__icon"></i> Thông tin tài khoản</h4>
        <div class="account__person">
            <p><i data-feather="phone" class="person__icon"></i>
                <?php echo $row['phone']; ?>
            </p>
            <p><i data-feather="user" class="person__icon"></i>
                <?php echo $row['full_name']; ?>
            </p>
            <p> <i data-feather="mail" class="person__icon"></i>
                <?php echo $row['email']; ?>
            </p>
        </div>

        <form method="post" action="../controller/deleteAccountController.php">
            <input type="submit" class="btnDelete" value="XÓA TÀI KHOẢN">
        </form>
    </div>
</body>
<script>feather.replace()</script>
<?php include '../../resources/includes/footer.php' ?>

</html>