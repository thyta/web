<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../public/css/checkout.css">

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

    <!-- Logo -->
    <div class="div-logo">
        <img src="../../public/img/logo.svg" alt="logo" class="checkout-img-logo">
    </div>

    <!-- Nội dung giỏ hàng -->
    <div class="divCheckout row">
        <div class="cus-info-container col-md-6 p-0 m-0">
            <div class="cus-info">
                <div class="cus-info-detail">
                    <p>Thông tin liên hệ của bạn</p>
                    <p>Trần Anh Thy</p>
                    <p>anhthy18072003.tran@gmail.com</p>
                    <p>0987814172</p>
                </div>
                <div class="deliveryAddress">
                    <div class="d-flex justify-content-between">
                        <input class="thyanh" type="text" placeholder="Họ và tên">
                        <input class="thyanh" type="text" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="d-flex justify-content-between">
                        <select class="thyanh" id="city">
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>
                        <select class="thyanh" id="district">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <select class="thyanh" id="ward">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                        <input class="thyanh" type="text" placeholder="Số nhà, đường, khu vực">
                    </div>
                </div>
            </div>

            <div class="cus-payment">
                <p>Phương thức thanh toán</p>
                <input type="radio" id="cod" name="payment" value="HTML">
                <label for="cod">Thanh toán khi giao hàng (COD)</label><br>
                <input type="radio" id="momo" name="payment" value="JavaScript">
                <label for="momo">Thanh toán bằng Ví MoMo</label><br>
                <input type="radio" id="cash" name="payment" value="CSS">
                <label for="bank">Thanh toán bằng thẻ ATM/VISA/MASTER (Alepay)</label>
            </div>
        </div>

        <div class="cus-info-container col-md-6 p-0 m-0">
            <div class="cus-cart">
                <p>Chi tiết đơn hàng</p>
                <table class="single-product-cart" style="width:100%;">
                    <thead class="text-muted">
                        <tr>
                            <th scope="col" width="20%"></th>
                            <th scope="col" width="60%"></th>
                            <th scope="col" width="20%" class="text-right"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-cart">
                            <td><img class="img-cart" src="../../public/img/daugoibuoi500ml.png" alt="dau goi dau buoi">
                            </td>
                            <td>
                                <div class="cart-name">
                                    <p>Nước dưỡng tóc tinh dầu bưởi phiên bản nâng cấp 500ml</p>
                                </div>
                                <div class="cart__quantity">
                                    <button class="btn cart-btn" onclick="decreaseQuantity('quantity1')">-</button>
                                    <input class="cart-quantity" type="text" id="quantity1" value="1" readonly>
                                    <button class="btn cart-btn" onclick="increaseQuantity('quantity1')">+</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block cart-btn" id="btnCreate">X</button>
                                <div>155.000 đ</div>
                            </td>
                        </tr>
                        <tr class="tr-cart">
                            <td><img class="img-cart" src="../../public/img/daugoibuoi500ml.png" alt="dau goi dau buoi">
                            </td>
                            <td>
                                <div class="cart-name">
                                    <p>Nước dưỡng tóc tinh dầu bưởi phiên bản nâng cấp 500ml</p>
                                </div>
                                <div class="cart__quantity">
                                    <button class="btn cart-btn" onclick="decreaseQuantity('quantity1')">-</button>
                                    <input class="cart-quantity" type="text" id="quantity1" value="1" readonly>
                                    <button class="btn cart-btn" onclick="increaseQuantity('quantity1')">+</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block cart-btn" id="btn-cancel">X</button>
                                <div>155.000 đ</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cus-coupon">
                <div>
                    NHẬP MÃ KHUYẾN MÃI HOẶC THẺ QUÀ TẶNG
                </div>
                <div>
                    <input class="nownib-1" type="text">
                    <button class="nownib-2">Áp dụng</button>
                </div>
            </div>
            <div class="cus-total d-flex justify-content-between">
                <div>
                    <p>Tổng cộng</p>
                    <h2>955 000 đ</h2>
                </div>
                <div>
                    <a class="btn" href="">
                        <p class="btn-payment"><b>Đặt hàng</b></p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <hr style="width: 85%;">
        <div class="container">
            <p>© 2023 Cocoon Vietnam. All rights reserved.</p>
        </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    const host = "https://provinces.open-api.vn/api/";
    var callAPI = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data, "city");
            });
    }
    callAPI('https://provinces.open-api.vn/api/?depth=1');
    var callApiDistrict = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.districts, "district");
            });
    }
    var callApiWard = (api) => {
        return axios.get(api)
            .then((response) => {
                renderData(response.data.wards, "ward");
            });
    }

    var renderData = (array, select) => {
        let row = ' <option disable value="">Chọn</option>';
        array.forEach(element => {
            row += `<option data-id="${element.code}" value="${element.name}">${element.name}</option>`
        });
        document.querySelector("#" + select).innerHTML = row
    }

    $("#city").change(() => {
        callApiDistrict(host + "p/" + $("#city").find(':selected').data('id') + "?depth=2");
        printResult();
    });
    $("#district").change(() => {
        callApiWard(host + "d/" + $("#district").find(':selected').data('id') + "?depth=2");
        printResult();
    });
    $("#ward").change(() => {
        printResult();
    })

    var printResult = () => {
        if ($("#district").find(':selected').data('id') != "" && $("#city").find(':selected').data('id') != "" &&
            $("#ward").find(':selected').data('id') != "") {
            let result = $("#city option:selected").text() +
                " - " + $("#district option:selected").text() + " - " +
                $("#ward option:selected").text();
            $("#result").text(result)
            // alert(result)
        }
    }
</script>

</html>