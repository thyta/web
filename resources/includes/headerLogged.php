<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Themify fonticon -->
    <link rel="stylesheet" href="../../public/font/themify-icons/themify-icons.css">
    <!-- Css -->
    <link rel="stylesheet" href="../../public/css/header.css">
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>



</head>

<body>
    <!-- HEADER PC: START -->
    <header class="header__pc">
        <div class="banner">Tận hưởng giao hàng toàn quốc với hóa đơn 99.000 đ +</div>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><button type="button" onclick="on__left()" class="nav__link btn-sample"
                        id="btn-product">Sản
                        phẩm</button></li>
                <li class="nav__item"><button type="button" onclick="on__left()" class="nav__link btn-sample"
                        id="btn-discount">Khuyến
                        mãi</button></li>
                <li class="nav__item"><button type="button" onclick="on__left()" class="nav__link btn-sample"
                        id="btn-cosmetic">Cosmetic</button></li>
                <li class="nav__item"><a href="" class="nav__link link-pc ">Bài viết</a></li>
            </ul>
            <div class="nav__logo"><img src="../../public/img/logo.png" alt=""></div>
            <ul class="nav__list">
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn-search">
                        <i data-feather="search"></i></button></li>
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn-login">Tài khoản</button></li>
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn-contact">Liên hệ</button></li>
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn-cart">Giỏ hàng</button></li>
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn-language">EN</button></li>
            </ul>
        </nav>
        <div class="overlay left-sidebar" id="overlay-left" onclick="off__left()"></div>
        <div class="overlay right-sidebar" id="overlay-right" onclick="off__right()"></div>
        <div class="overlay second-sidebar" id="overlay-sidebar" onclick="hideOverlay()"></div>
        <!-- PRODUCT: START -->
        <div class="product side-bar" id="product">
            <div class="product__menu">
                <i data-feather="x" class="close__product close-sample" id="close-product"></i>
                <p>Sản phẩm</p>
                <ul class="product__list" id="product-list">
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('new-product')">Sản Phẩm Mới</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('skincare')">Chăm Sóc Da</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('haircare')">Chăm Sóc Tóc</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('bath-bodycare')">Tắm & Dưỡng Thể</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('lip-balm')">Dưỡng Môi</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('combo')">Combo / Bộ Sản Phẩm</a></li>
                </ul>
            </div>

            <div class="product__related">
                <p>Có thể bạn quan tâm</p>
                <ul id="related-list">
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('skin-problem')">Vấn Đề Về Da</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('hair-problem')">Vấn Để Về Tóc</a></li>
                </ul>
            </div>
            <div class="product__ingredient">
                <ul id="ingredient">
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmouseover="showContent('find-ingredient')">Tìm Hiểu Nguyên Liệu</a></li>
                </ul>
            </div>
        </div>
        <!-- PRODUCT:END -->

        <!-- CATEGORY PRODUCT - SECOND SIDEBAR: START -->
        <div class="group__second--sidebar side-bar-second" id="middle-sidebar">

            <!-- New Product -->
            <i data-feather="x" class="group__close close-sample" id="close-new-product" onclick="closeSidebar()"></i>
            <div class="group__second--content" id="new-product">
                <p>Sản Phẩm Mới</p>
                <ul class="group__product--list" id="new-product-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Dầu gội bưởi không sulfate 500ml</div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product">375.000 đ</div>
                            </div>
                            <img src="../../public/img/daugoibuoi500ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Gel rửa mặt cà phê Đắk Lắk 140ml</div>
                                <div class="group__describe--product">Cho làn da mềm mại và rạng rỡ</div>
                                <div class="group__price--product">195.000 đ</div>
                            </div>
                            <img src="../../public/img/gelruamat140ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Nước dưỡng tóc tinh dầu bưởi phiên bản nâng cấp 140ml
                                </div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product">165.000 đ</div>
                            </div>
                            <img src="../../public/img/nuocduongtoc14ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- SkinCare -->
            <div class="group__second--content" id="skincare">
                <p>Chăm Sóc Da</p>
                <ul class="group__list" id="skincare-list">
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-1')">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-2')">Chống Nắng</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-3')">Tẩy Trang</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-4')">Sữa Rửa Mặt</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-5')">Tẩy Da Chết Mặt</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('skincare-6')">Mặt Nạ</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Nước
                            Cân Bằng</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Tinh
                            Chất</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Kem
                            Dưỡng</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Xịt
                            Khoáng</a></li>
                </ul>
            </div>

            <!-- Hair Care -->
            <div class="group__second--content" id="haircare">
                <p>Chăm Sóc Tóc</p>
                <ul class="group__list" id="haircare-list">
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('haircare-1')">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('haircare-2')">Dầu gội</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc"
                            onmousemove="showInfoProduct('haircare-3')">Kem Ủ</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Dầu
                            Xả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Nước
                            Dưỡng Tóc</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc" onmousemove="showInfoProduct()">Tinh
                            Chất Dưỡng Tóc</a></li>
                </ul>
            </div>

            <!-- Bath & Body Care -->
            <div class="group__second--content" id="bath-bodycare">
                <p>Tắm & Dưỡng thể</p>
                <ul class="group__list" id="bath-bodycare-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Tẩy Da Chết Cơ Thể</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Sữa Tắm</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Xịt Cơ Thể</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Dưỡng Thể</a></li>
                </ul>
            </div>

            <!-- Lip Balm -->
            <div class="group__second--content" id="lip-balm">
                <p>Dưỡng môi</p>
                <ul class="group__list" id="lip-balm-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Tẩy Da Chết Môi</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Dưỡng Ẩm Môi</a></li>
                </ul>
            </div>

            <!-- ComBo -->
            <div class="group__second--content" id="combo">
                <p>Combo</p>
                <ul class="group__list" id="combo-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Chăm Sóc Da Mặt</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Chăm Sóc Cơ Thể</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Chăm Sóc Tóc</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Chăm Sóc Môi</a></li>
                </ul>
            </div>

            <!-- Skin Problem -->
            <div class="group__second--content" id="skin-problem">
                <p>Vấn đề về da</p>
                <ul class="group__list" id="skin-problem-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Da Khô</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Da Dầu Mụn</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Da Nhạy Cảm</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Da Xỉn Màu</a></li>
                </ul>
            </div>
            <!-- Hair Problem -->
            <div class="group__second--content" id="hair-problem">
                <p>Vấn đề về tóc</p>
                <ul class="group__list" id="hair-problem-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Tóc Khô, Xơ</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Rụng Tóc</a></li>
                </ul>
            </div>
            <!-- Find Ingredient -->
            <div class="group__second--content" id="find-ingredient">
                <p>Tìm hiểu Nguyên Liệu</p>
                <ul class="group__list" id="ingredient-list">
                    <li class="group__item"><a href="" class="group__link link-pc">Tất Cả</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Bí Đao</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Hoa Hồng Cao Bằng</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Nghệ Hưng Yên</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Cà Phê Đắk Lắk</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Vỏ Bưởi</a></li>
                    <li class="group__item"><a href="" class="group__link link-pc">Dầu Dừa Bến Tre</a></li>
                </ul>
            </div>
        </div>
        <!-- CATEGORY PRODUCT - SECOND SIDEBAR: END -->

        <!-- SHOW PRODUCT - THIRD SIDEBAR: START -->
        <div class="group__third--sidebar side-bar-third" id="third-sidebar">

            <!-- SKINCARE PRODUCT: START-->
            <div class="group__third--content group__background" id="skincare-1">
                <img src="../../public/img/backgroundda.png" alt="">
            </div>
            <!-- CHONG NANG -->

            <div class="group__third--content" id="skincare-2">
                <p>Chống nắng</p>
                <ul class="group__product--list" id="skincare-2-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Sữa chống nắng bí đao 50ml</div>
                                <div class="group__describe--product">Chống nắng, bảo vệ da trước các tia UV</div>
                                <div class="group__price--product">395.000 đ</div>
                            </div>
                            <img src="../../public/img/suachongnang50ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Sữa chống nắng bí đao 50ml</div>
                                <div class="group__describe--product">Chống nắng, bảo vệ da trước các tia UV</div>
                                <div class="group__price--product">155.000 đ</div>
                            </div>
                            <img src="../../public/img/suachongnang15ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Kem chống nắng bí đao 50ml</div>
                                <div class="group__describe--product">Chống nắng, bảo vệ da trước các tia UV</div>
                                <div class="group__price--product">395.000 đ</div>
                            </div>
                            <img src="../../public/img/kemchongnang50ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- TAY TRANG -->
            <div class="group__third--content" id="skincare-3">
                <p>Tẩy Trang</p>
                <ul class="group__product--list" id="skincare-3-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Nước tẩy trang hoa hồng 140ml</div>
                                <div class="group__describe--product">Làm sạch sâu và cấp ẩm</div>
                                <div class="group__price--product">155.000 đ</div>
                            </div>
                            <img src="../../public/img/nuocduongtoc14ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Nước tẩy trang hoa hồng 310ml</div>
                                <div class="group__describe--product">Làm sạch sâu và cấp ẩm</div>
                                <div class="group__price--product">245.000 đ</div>
                            </div>
                            <img src="../../public/img/nuoctaytrang310ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Dầu tẩy trang hoa hồng 140ml</div>
                                <div class="group__describe--product">Làm sạch sâu và dưỡng ẩm</div>
                                <div class="group__price--product">180.000 đ</div>
                            </div>
                            <img src="../../public/img/dautaytrang140ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- SUA RUA MAT -->
            <div class="group__third--content" id="skincare-4">
                <p>Chống nắng</p>
                <ul class="group__product--list" id="skincare-4-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Gel rửa mặt cà phê Đắk Lắk 140ml</div>
                                <div class="group__describe--product">Cho làn da mềm mại và rạng rỡ</div>
                                <div class="group__price--product">195.000 đ</div>
                            </div>
                            <img src="../../public/img/gelruamat140ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Sữa rửa mặt nghệ Hưng Yên 140ml</div>
                                <div class="group__describe--product">Da sạch mịn và rạng rỡ</div>
                                <div class="group__price--product">195.000 đ</div>
                            </div>
                            <img src="../../public/img/suaruamatHungYen140ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Gel rửa mặt hoa hồng 140ml
                                </div>
                                <div class="group__describe--product">Làm sạch và cấp ẩm</div>
                                <div class="group__price--product">195.000 đ</div>
                            </div>
                            <img src="../../public/img/gelruamathoahong140ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- TAY DA CHET MAT -->
            <div class="group__third--content" id="skincare-5">
                <p>Tay Da Chet Mat</p>
                <ul class="group__product--list" id="skincare-5-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Cà phê Đắk Lắk làm sạch da chết mặt 150ml</div>
                                <div class="group__describe--product">Cho làn da mềm mại và rạng rỡ</div>
                                <div class="group__price--product">165.000 đ</div>
                            </div>
                            <img src="../../public/img/taydachetcapheDakLak150ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- MAT NA -->
            <div class="group__third--content" id="skincare-6">
                <p>Mặt Nạ</p>
                <ul class="group__product--list" id="skincare-6-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ bí đao 100ml</div>
                                <div class="group__describe--product">Giảm dầu và mụn</div>
                                <div class="group__price--product">345.000 đ</div>
                            </div>
                            <img src="../../public/img/matnabidao30ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ bí đao 30ml</div>
                                <div class="group__describe--product">Giảm dầu và mụn</div>
                                <div class="group__price--product">145.000 đ</div>
                            </div>
                            <img src="../../public/img/matnabidao30ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ hoa hồng 30ml</div>
                                <div class="group__describe--product">Cấp ẩm và làm mềm da</div>
                                <div class="group__price--product">145.000 đ</div>
                            </div>
                            <img src="../../public/img/matnahoahong100ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- MAT NA -->
            <div class="group__third--content" id="skincare-6">
                <p>Mặt Nạ</p>
                <ul class="group__product--list" id="skincare-6-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ bí đao 100ml</div>
                                <div class="group__describe--product">Giảm dầu và mụn</div>
                                <div class="group__price--product">345.000 đ</div>
                            </div>
                            <img src="../../public/img/matnabidao30ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ bí đao 30ml</div>
                                <div class="group__describe--product">Giảm dầu và mụn</div>
                                <div class="group__price--product">145.000 đ</div>
                            </div>
                            <img src="../../public/img/matnabidao30ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Mặt nạ hoa hồng 30ml</div>
                                <div class="group__describe--product">Cấp ẩm và làm mềm da</div>
                                <div class="group__price--product">145.000 đ</div>
                            </div>
                            <img src="../../public/img/matnahoahong100ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- SKINCARE PRODUCT: END-->

            <!-- HAIRCARE PRODUCT: START-->
            <div class="group__third--content group__background" id="haircare-1">
                <img src="../../public/img/backgroundtoc.png" alt="">
            </div>
            <!-- DAU GOI -->
            <div class="group__third--content" id="haircare-2">
                <p>Dầu Gội</p>
                <ul class="group__product--list" id="haircare-2-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Dầu gội bưởi không sulfate 310ml</div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product"> 245.000 đ</div>
                            </div>
                            <img src="../../public/img/daugoibuoi310ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Dầu gội bưởi không sulfate 310ml</div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product"> 245.000 đ</div>
                            </div>
                            <img src="../../public/img/daugoibuoi500ml.png" alt="">
                        </a>
                    </li>

                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Dầu gội bưởi refill không sulfate 500ml</div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product">355.000 đ</div>
                            </div>
                            <img src="../../public/img/daugoibuoirefill500ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- KEM U -->
            <div class="group__third--content" id="haircare-3">
                <p>Kem Ủ</p>
                <ul class="group__product--list" id="haircare-3-list">
                    <li class="group__product--item">
                        <a href="" class="group__product--link link-pc">
                            <div class="group__info--product">
                                <div class="group__name--product">Kem ủ tóc bưởi 200ml</div>
                                <div class="group__describe--product">Giảm gãy rụng và làm mềm tóc</div>
                                <div class="group__price--product"> 215.000 đ</div>
                            </div>
                            <img src="../../public/img/kemu200ml.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- HAIRCARE PRODUCT: END-->

        </div>
        <!-- SHOW PRODUCT - THIRD SIDEBAR: END -->

        <!-- DISCOUNT: START -->
        <div class="discount side-bar" id="discount">
            <i data-feather="x" class="close__discount close-sample" id="close-discount"></i>
            <p>Discount</p>
            <ul class="discount__list" id="discount-list">
                <li class="discount__item"><a href="" class="discount__link link-pc">Cà phê Đắk Lắk nguyên chất
                        từng hạt</a></li>
            </ul>
        </div>
        <!-- DISCOUNT: END -->

        <!-- COSMETIC: START -->
        <div class="cosmetic side-bar" id="cosmetic">
            <i data-feather="x" class="close__cosmetic close-sample" id="close-cosmetic"></i>
            <p>Cosmetic</p>
            <ul class="cosmetic__list" id="cosmetic-list">
                <li class="cosmetic__item"><a href="" class="cosmetic__link link-pc">Câu chuyện thương hiệu</a></li>
                <li class="cosmetic__item"><a href="" class="cosmetic__link link-pc">Giá trị cốt lõi</a></li>
                <li class="cosmetic__item"><a href="" class="cosmetic__link link-pc">Trách nhiệm cộng đồng</a></li>
            </ul>
        </div>
        <!-- COSMETIC: END -->

        <!-- SEARCH: START -->
        <div class="search side-bar-right" id="search">
            <i data-feather="x" class="close__search close-sample" id="close-search"></i>
            <div class="search__container">
                <div>
                    <form method="GET" action="postcontroller.php">
                        <input type="hidden" name="action" value="Search">
                        <div class="search__input" id="search-input">
                            <p>Nhập từ khóa bạn muốn tìm kiếm</p>
                            <input type="text" placeholder="Tìm kiếm theo tên sản phẩm..." name="keyword" id="keyword">
                            <button type="submit" class="btn-sample">
                                <i data-feather="arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="search__suggest" id="search-suggest">
                    <p>Gợi ý tìm kiếm:</p>
                    <ul class="suggest__list" id="suggest-list">
                        <li class="suggest__item"><a href="" class="suggest__link link-pc">Sữa rửa mặt</a></li>
                        <li class="suggest__item"><a href="" class="suggest__link link-pc">Nước tẩy trang</a></li>
                        <li class="suggest__item"><a href="" class="suggest__link link-pc">Gel tắm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- SEARCH: END -->

        <!-- CART: END -->
        <div class="cart side-bar-right" id="cart">
            <i data-feather="x" class="close__cart close-sample" id="close-cart"></i>
            <div></div>
            <div class="cart-empty__body">
                <div class="title link-pc">OOPSS</div>
                <div class="message link-pc">Giỏ hàng hiện đang trống <br>
                    Không có sản phẩm nào trong <br>
                    giỏ của bạn
                </div>
                <a href="" class="button">TIẾP TỤC MUA SẮM</a>
            </div>
        </div>
        <!-- CART: END -->

    </header>

    <!-- HEADER PC: END -->
    <!-- CONTACT: START -->
    <div class="contact side-bar-center" id="contact">

        <i data-feather="x" class="close__contact close-sample" id="close-contact"></i>
        <div class="contact__container">
            <div class="contact__title">Liên hệ với The Cosmetic Scrupts</div>
            <form action="" method="">
                <div class="contact__col">
                    <div>
                        <div>
                            <input type="text" class="contact__name group__input" required="required" name=""
                                id="yourname" placeholder="Tên của bạn*" tabindex="1" autocomplete="off">
                        </div>
                        <span data-v-00568c7a class="group__status">Vui lòng nhập tên của bạn!</span>
                    </div>
                    <div>
                        <div>
                            <input type="tel" class="contact__tel group__input" required="required" name="" id="yourtel"
                                placeholder="Số điện thoại*" tabindex="1" autocomplete="off">
                        </div>
                        <span data-v-00568c7a class="group__status">Vui lòng nhập số điện thoại hợp lệ!</span>
                    </div>
                </div>
                <div>
                    <div>
                        <input type="email" class="contact__email group__input" required="required" name=""
                            id="youremail" placeholder="Địa chỉ Email*" tabindex="1" autocomplete="off">
                    </div>
                    <span data-v-00568c7a class="group__status">Vui lòng nhập email hợp lệ!</span>
                </div>
                <div>
                    <div>
                        <input type="text" class="contact__question group__input" required="required" name=""
                            id="yourquestion" placeholder="Nhập câu hỏi của bạn*" tabindex="1" autocomplete="off">
                    </div>
                    <span data-v-00568c7a class="group__status">Vui lòng nhập câu hỏi!</span>
                </div>
                <div class="contact__btn">
                    <button class="btnSend button">GỬI COSMETIC</button>
                    <a href="" class="btnCall button">GỌI CHO COSMETIC</a>
                </div>
            </form>
        </div>
    </div>
    <!-- CONTACT: END -->

    <!-- LOGIN: START -->
    <!-- LOGIN: START -->
    <form action="../controller/logoutController.php" method="post" class="login side-bar-center" id="login">
        <i data-feather="x" class="close__login close-sample" id="close-login"></i>
        <div class="login__container">
            <div class="d-flex justify-content-between align-content-center">
                <button type="submit" class="dang-nhap">ĐĂNG XUÂT</button>
            </div>
        </div>
    </form>

    <!-- LOGIN: END -->

    <!-- HEADER MOBILE: START -->
    <header class="header__mobile">
        <div class="banner">Tận hưởng giao hàng toàn quốc với hóa đơn 99.000 đ +</div>
        <nav class="nav">
            <div class="nav__list--menu" id="nav-list-menu">
                <ul id="nav-list-content">
                    <li class="nav__item"><i data-feather="x" class="close__menu" id="close-menu"></i></li>
                    <li class="nav__item">
                        <!-- PRODUCT MOBILE: START -->
                        <div class="product__mobile" id="product-mobile">
                            <div class="product__mobile--category">
                                <p class="group__title" id="btn-product-mobile">Sản phẩm</p>
                                <ul class="product-list-mobile" id="product-list-mobile">
                                    <li class="group__item--mobile">
                                        <a class="group__link--mobile btn-sample">Sản Phẩm Mới</a>
                                    </li>
                                    <li class="group__item--mobile">
                                        <a class="group__link--mobile btn-sample">Chăm Sóc Da</a>
                                    </li>
                                    <li class="group__item--mobile">
                                        <a class="group__link--mobile btn-sample">Chăm Sóc Tóc</a>
                                    </li>
                                    <li class="group__item--mobile"><a class="group__link--mobile btn-sample">Tắm &
                                            Dưỡng
                                            Thể</a></li>
                                    <li class="group__item--mobile">
                                        <a class="group__link--mobile btn-sample">Dưỡng Môi</a>
                                    </li>
                                    <li class="group__item--mobile">
                                        <a class="group__link--mobile btn-sample">Combo / Bộ Sản Phẩm</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- RELATED PRODUCT MOBILE: START -->
                            <div>
                                <p class="group__title" id="btn-product-related">Có thể bạn quan tâm</p>
                                <ul class="product__related--mobile" id="product-related-mobile">
                                    <li class="group__item--mobile"><button type="button"
                                            class="group__link--mobile btn-sample">Vấn
                                            Đề Về Tóc</button></li>
                                    <li class="group__item--mobile"><button type="button"
                                            class="group__link--mobile btn-sample">Vấn
                                            Đề Về Da</button></li>
                                </ul>
                            </div>
                            <!-- RELATED PRODUCT MOBILE: END -->
                            <div>
                                <ul>
                                    <li class="group__item--mobile"><button type="button"
                                            class="group__title btn-sample">Tìm Hiểu Nguyên Liệu</button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- PRODUCT MOBILE:END -->
                    </li>
                    <li class="nav__item">
                        <div>
                            <p class="group__title" id="btn-discount-mobile">Khuyến Mãi</p>
                            <ul class="discount__mobile" id="discount-mobile">
                                <li class="group__item--mobile">
                                    <a href="" class="group__link--mobile btn-sample">
                                        Cà phê Đắk Lắk nguyên chất từng hạt
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav__item">
                        <div>
                            <p class="group__title" id="btn-cosmetic-mobile">Cosmetic</p>
                            <ul class="cosmetic__mobile" id="cosmetic-mobile">
                                <li class="group__item--mobile">
                                    <a href="" class="group__link--mobile btn-sample">
                                        Câu chuyện thương hiệu
                                    </a>
                                </li>
                                <li class="group__item--mobile">
                                    <a href="" class="group__link--mobile btn-sample">
                                        Giá trị cốt lõi
                                    </a>
                                </li>
                                <li class="group__item--mobile">
                                    <a href="" class="group__link--mobile btn-sample">
                                        Trách nhiệm cộng đồng
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav__item"><a href="" class="nav__link link-mobile">Bài viết</a></li>
                    <li class="nav__item"><button type="button" onclick="on__left()" class="nav__link btn-sample"
                            id="btn">Liên hệ</button></li>
                    <li class="nav__item"><button type="button" onclick="on__left()" class="nav__link btn-sample"
                            id="btn">EN</button></li>
                </ul>
                <div><i data-feather="user" class="login__mobile" id="btn-login-mobile"></i></div>
            </div>
            <i data-feather="menu" class="open__menu" id="open-menu"></i>
            <div class="nav__logo"><img src="../../public/img/logo.png" alt=""></div>

            <ul class="nav__list">
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn"><i data-feather="search" id="search-menu"></i></button></li>
                <li class="nav__item"><button type="button" onclick="on__right()" class="nav__link btn-sample"
                        id="btn"><i data-feather="shopping-bag" id="cart-id"></i></button></li>
            </ul>
        </nav>
    </header>

</body>
<!-- SCRIPT -->
<script>feather.replace()</script>
<script src="../../public/js/header.js"></script>

</html>