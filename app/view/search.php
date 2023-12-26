<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- FontAwsome -->
    <link rel="stylesheet" href="../../public/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89154cd7a2.js" crossorigin="anonymous"></script>
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- Include jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
    
    <style>
        @media screen and (max-width: 1023px) {
            .search {
                margin: 3% 10%;
                width: 80%;
            }

            .search__input {
                width: 85%;
            }

            .btnSearch {
                width: 15%;
            }
        }

        .search {
            margin: 3% 25%;
            width: 50%;
            height: auto;
            position: relative;
        }

        .search__contaner {
            width: 100%;
        }

        .search__input {
            width: 91%;
            height: 40px;
            border: 1px solid #C5A25D;
            border-radius: 20px 0 0 20px;
            font-size: 18px;
            float: left;
            padding-left: 15px;
            box-sizing: border-box;
        }

        .btnSearch {
            width: 9%;
            height: 40px;
            border: 1px solid #C5A25D;
            border-radius: 0 20px 20px 0;
            background-color: #fefbf4;
            border-left: none;
        }

        .search__icon {
            color: #C5A25D;
        }

        .search__icon:hover {
            color: #414548;
        }

        .product_name {
            margin-bottom: 10px;
            font-size: 16px;
            color: #414548;
            font-weight: 600;
            font-family: 'Nunito';
        }

        .description {
            margin-bottom: 10px;
            font-size: 12px;
            color: #414548;
            font-family: 'Nunito';
        }

        .product_price {
            font-size: 16px;
            color: #414548;
            font-family: 'Barlow';
        }

        .search__info {
            display: flex;
            align-items: center;
            position: relative;
        }

        .info__container {
            width: 80%;
        }

        .btnOrder {
            border: none;
            background-color: #ede0cc;
            width: 56px;
            height: 56px;
            font-size: 26px;
            border-radius: 5px;
            position: absolute;
            top: 20%;
            right: 0;
        }

        .col-md-3,
        .col-sm-6,
        .col-xs-12 {
            margin: 0 0 10px 0;
            border: none;
        }

        .divSearchResult {
            margin: 0 5%;
            display: inline-block;
            border: none;
        }

        .search__img {
            border-radius: 10px;
        }
    </style>
    <script>
        $(document).ready(function () {
            // Function to perform search
            function performSearch() {
                var keyword = $("#txtKeyword").val();
                alert(keyword);
                $.ajax({
                    url: "../controller/searchController.php?keyword=" + keyword,
                    method: "GET",
                    success: function (data) {
                        console.log("Response data:", data);
                        $(".divSearchResult").html(data);
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }

            // Click event for the search button
            $("body").on("click", "#btnSearch", function () {
                performSearch();
            });

            // Keyup event for the Enter key
            $("#txtKeyword").keyup(function (event) {
                if (event.keyCode === 13) {
                    // If Enter key is pressed
                    performSearch();
                }
            });

            // Load event for the page
            $(window).on('load', function () {
                $.ajax({
                    url: "../controller/searchController.php?keyword=",
                    method: "GET",
                    success: function (data) {
                        console.log("Response data:", data);
                        $(".divSearchResult").html(data);
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="search">
        <div class="search__container">
            <div>
                <input id="txtKeyword" name="keyword" type="text" class="search__input"
                    placeholder="Nhập sản phẩm bạn muốn tìm kiếm">
            </div>
            <div>
                <button class="btnSearch" id="btnSearch" type="submit"><i data-feather="search"
                        class="search__icon"></i></button>
            </div>
        </div>
        <br />
        <!-- Grid system -->
    </div>
    <div id="divSearchResult" class="divSearchResult">
        <!-- Add other product items here -->
    </div>
</body>
<?php include '../../resources/includes/footer.php' ?>
<script>feather.replace()</script>

</html>