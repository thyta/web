<script>
$(document).ready(function () {
    // Thay đổi sự kiện từ click thành load
    $(window).on('load', function () {
        var productID = '<?php echo $PHP_productID; ?>';
        alert(productID);
        console.log("Product ID:", productID);
        
        // Thực hiện yêu cầu AJAX khi trang được tải
        $.get("../../app/controller/cartController.php?action=add&productID=" + productID, function (data, status) {
            console.log("Response data:", data);
            $(".divMainCart").html(data);
        });
    });
});
</script>
