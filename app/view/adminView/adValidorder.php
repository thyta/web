<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../../../app/view/homepage.php");
// }

// // IF not session or not logged in
// if (isset($_SESSION['user_type']) == 2) {
//     echo "<script> alert'bạn không phải admin'</script>";
//     header("Location: ../../../app/view/homepage.php");
// } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .page-btn {
            margin: 5px;
        }
    </style>

    <script>
        $(document).ready(function () {
            // Initial load
            $.get("../../controller/admin/adValidorderController.php?page=1", function (data, status) {
                console.log("Initial Load AJAX Response:", data);
                $(".divManageOrder").html(data);
            })

            $(".page-btn").click(function () {
                // Get the value of the clicked button
                var pageBtnValue = $(this).val();
                // Send search request to web server with the button value
                $.get("../../controller/admin/adValidorderController.php?page=" + pageBtnValue, function (data, status) {
                    $(".divManageOrder").html(data);
                });
            });
        });
    </script>
</head>

<body class="bg-light">
    <img src="../../../public/img/logo.png" alt="" style="width: 15%; height: auto; margin-left: 6%">
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th style="width: 20%;">User ID</th>
                    <th style="width: 20%;">Order ID</th>
                    <th style="width: 20%;">Tổng mức giá</th>
                    <th style="width: 40%;">Hành động</th>
                </tr>
            </thead>
            <tbody class="divManageOrder">
            </tbody>
        </table>
        <div class="pagination justify-content-center divPerPage">
            <button class="btn btn-secondary page-btn mx-1" value="1">1</button>
            <button class="btn btn-secondary page-btn mx-1" value="2">2</button>
            <button class="btn btn-secondary page-btn mx-1" value="3">3</button>
            <button class="btn btn-secondary page-btn mx-1" value="4">4</button>
            <button class="btn btn-secondary page-btn mx-1" value="5">5</button>
        </div>
    </div>
</body>

</html>