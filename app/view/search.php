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
    <link rel="stylesheet" href="../../public/css/search.css">
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
                $.get("../controller/searchController.php?keyword=" + keyword, function (data, status) {
                    //Update result to divSearchResult
                    $("#divSearchResult").html(data);
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
        <div class="col-md-3 col-sm-6 col-xs-12 thumbnail">
            <img src="../../public/img/best-saler-11.jpg" alt="" class="search__img">
            <div class="search__info">
                <div div class="info__container">
                    <p class="product_name">Nước dưỡng tóc tình dầu </p>
                    <p class="description"> Sản phẩm này làm từ bưởi</p>
                    <p class="product_price">165.000 đ</p>
                </div>
                <div>
                    <button type="buton" class="btnOrder"><i class="ti-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 thumbnail">
            <img src="../../public/img/best-saler-11.jpg" alt="" class="search__img">
            <div class="search__info">
                <div class="info__container">
                    <p class="product_name">Nước dưỡng tóc tình dầu </p>
                    <p class="description"> Sản phẩm này làm từ bưởi</p>
                    <p class="product_price">165.000 đ</p>
                </div>
                <div>
                    <button type="buton" class="btnOrder"><i class="ti-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 thumbnail">
            <img src="../../public/img/best-saler-11.jpg" alt="" class="search__img">
            <div class="search__info">
                <div div class="info__container">
                    <p class="product_name">Nước dưỡng tóc tình dầu </p>
                    <p class="description"> Sản phẩm này làm từ bưởi</p>
                    <p class="product_price">165.000 đ</p>
                </div>
                <div>
                    <button type="buton" class="btnOrder"><i class="ti-shopping-cart"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 thumbnail">
            <img src="../../public/img/best-saler-11.jpg" alt="" class="search__img">
            <div class="search__info">
                <div div class="info__container">
                    <p class="product_name">Nước dưỡng tóc tình dầu </p>
                    <p class="description"> Sản phẩm này làm từ bưởi</p>
                    <p class="product_price">165.000 đ</p>
                </div>
                <div>
                    <button type="buton" class="btnOrder"><i class="ti-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include '../../resources/includes/footer.php' ?>
<script>feather.replace()</script>

</html>
