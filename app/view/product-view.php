<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!--Style-->
    <link rel="stylesheet" href="../../public/css/product.css">

    <?php include '../../resources/head/fh_head.php' ?>

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
</head>

<body>
    <div class="body">
        <div class="heading_page">CHĂM SÓC DA</div>
        <div class="product-list tay_trang">
            <div class="product-list-heading">
                Tẩy trang
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Sua_Rua_Mat">
            <div class="product-list-heading">
                Sữa Rửa Mặt
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Nuoc_Can_Bang">
            <div class="product-list-heading">
                Nước Cân Bằng
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Mat_Na">
            <div class="product-list-heading">
                Mặt Nạ
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Tay_Da">
            <div class="product-list-heading">
                Tẩy DA Chết Mặt
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Kem_Duong">
            <div class="product-list-heading">
                Kem Dưỡng
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Xit_Khoang">
            <div class="product-list-heading">
                Xịt Khoáng
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
        <div class="product-list Chong_Nang">
            <div class="product-list-heading">
                Chống Nắng
            </div>
            <div class="product-list-slider">
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="" class="product-item-link">
                        <img class="product-list-item-img " src="../../public/img/product_Taytrang.jpg" alt="">
                    </a>
                    <div class="product-item-detail">
                        <div class="product-item-scipts">
                            <p class="product-item-heading" style="font-weight: 600; font-size:larger">Nước tẩy trang
                                hoa hồng 310ml </p>
                            <p class="product-item-txt" style="font-weight: 300;">Làm sạch sâu và cấp ẩm</p>
                            <p class="product-item-price" style="font-size: 16px;">245.000 đ </p>
                        </div>
                        <i class="ti-shopping-cart"></i>
                    </div>
                </div>


            </div>

        </div>
    </div>

</body>

<!-- <script src="../../public/js/product.js"></script> -->

<?php include '../../resources/includes/footer.php' ?>

</html>