<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../public/css/adminCSS/adManage.css">

    <style>
        .page-btn {
            margin: 5px;
        }
    </style>

    <script>
        $(document).ready(function () {
            // Initial load
            $.get("../../controller/admin/adManageController.php?page=1", function (data, status) {
                console.log("Initial Load AJAX Response:", data);
                $(".divManageProduct").html(data);
            })

            $(".page-btn").click(function () {
                // Get the value of the clicked button
                var pageBtnValue = $(this).val();
                // Send search request to web server with the button value
                $.get("../../controller/admin/adManageController.php?page=" + pageBtnValue, function (data, status) {
                    $(".divManageProduct").html(data);
                });

            });
        });
    </script>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Phân loại</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody class="divManageProduct">
            </tbody>
        </table>
        <div class="pagination justify-content-center divPerPage">
            <button class="btn btn-secondary page-btn mx-1" value="1">1</button>
            <button class="btn btn-secondary page-btn mx-1" value="2">2</button>
            <button class="btn btn-secondary page-btn mx-1" value="3">3</button>
            <button class="btn btn-secondary page-btn mx-1" value="4">4</button>
            <button class="btn btn-secondary page-btn mx-1" value="5">5</button>
            <button class="btn btn-secondary page-btn mx-1" value="6">6</button>
        </div>
    </div>
    <div class="coupon">
        <div class="container__input">
            <label for="coupon_code">Mã khuyến mãi:</label>
            <input type="text" id="coupon_code" name="coupon_code" required class="group__input">
        </div>
        <div class="container__input">
            <label for="discount_percentage">% khuyến mãi:</label>
            <input type="number" id="discount_percentage" name="discount_percentage" step="0.01" required
                class="group__input">
        </div>
        <div class="container__input">
            <label for="start_date">Ngày bắt đầu:</label>
            <input type="date" id="start_date" name="start_date" required class="group__input">
        </div>
        <div class="container__input">
            <label for="end_date">Ngày kết thúc:</label>
            <input type="date" id="end_date" name="end_date" required class="group__input">
        </div>
        <div class="container__btn">
            <button type="submit" onclick="createCoupon" id="btnCoupon">Tạo Voucher</button>
        </div>
    </div>
    <!-- TABLE ANNOUNCE -->
    <div class="announce" id="announce">
        <p id="message__announce"></p>
        <button class="btnOK button" id="btnOK" >OK</button>
    </div>
</body>
<script>
    $(document).ready(function () {
        $("#btnCoupon").click(function () {
            var announce = document.getElementById('announce');
            announce.classList.add('show__announce');

            var couponCode = $("#coupon_code").val();
            var discountPercentage = $("#discount_percentage").val();
            var startDate = $("#start_date").val();
            var endDate = $("#end_date").val();

            var requestData = {
                coupon_code: couponCode,
                discount_percentage: discountPercentage,
                start_date: startDate,
                end_date: endDate
            };
            $.ajax({
                method: "POST",
                url: "../../controller/admin/adCouponController.php",
                data: requestData,
                success: function (data) {
                    // Cập nhật thông báo phản hồi
                    $("#message__announce").html(data);
                }
            });
            $("#btnOK").click(function () {
                announce.classList.remove('show__announce');
            });
        });

    });
</script>

</html>