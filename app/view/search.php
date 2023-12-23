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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- include config for header and footer -->
    <?php include('../../resources/head/fh_head.php') ?>
    <!-- include header -->
    <?php
    session_start();
    // Check if the user is logged in
    
    // IF not session or not logged in
    if (!isset($_SESSION['user_id'])) {
        include '../../resources/includes/header.php';
    } else {
        include '../../resources/includes/headerLogged.php';
    }
    ?>
    <script>
        $(document).ready(function () {
            $("#btnSearch").click(function () {
                //Get keyword entered by user
                var keyword = $("#txtKeyword").val();

                //Send search request to web server
                $.get("../server/searchpost.php?keyword=" + keyword, function (data, status) {
                    //Update result to divSearchResult
                    $("#divSearchResult").html(data);
                });
            });
        });
    </script>
    <style>
        .search {
            margin: 5% 25%;
            width: 50%;
            height: auto;

        }

        .search__contaner {
            width: 100%;
        }

        .search__input {
            width: 92%;
            height: 40px;
            border: 1px solid #C5A25D;
            border-radius: 20px 0 0 20px;
            font-size: 16px;
            float: left;
        }

        .btnSearch {
            width: 8%;
            height: 40px;
            border: 1px solid #C5A25D;
            border-radius: 0 20px 20px 0;
            background-color: #fefbf4;
            border-left: none;
        }

        .search__icon {
            color: #C5A25D;
        }
    </style>
</head>

<body>
    <div class="search">
        <div class="search__container">
            <div>
                <input id="txtKeyword" name="keyword" type="text" class="search__input"
                    placeholder="Nhập sản phẩm bạn muốn tìm kiếm">
            </div>
            <div>
                <button class="btnSearch" type="submit"><i data-feather="search" class="search__icon"></i></button>
            </div>
        </div>
        <br />
        <!-- Grid system -->
        <div id="divSearchResult" class="row">
        </div>
    </div>
</body>
<?php include '../../resources/includes/footer.php' ?>
<script>feather.replace()</script>

</html>