<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../public/css/adminCSS/adUpdate.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // Get the current URL
        var currentURL = window.location.href;

        // Use URLSearchParams to extract query parameters
        var urlParams = new URLSearchParams(currentURL);

        // Get the value of the "page" parameter
        var idValue = urlParams.get("id");

        console.log("Page value:", idValue);

        $.get("../../controller/admin/adManageController.php?page=1", function (data, status) {
            console.log("Initial Load AJAX Response:", data);
            $(".divManageProduct").html(data);
        })
    </script>
</head>

<body>
    <div class="container mt-5 row">
        <!-- load the product information use script -->
        <div class="col-md-6 divProductInfo">
        </div>
        <div class="col-md-6">

        </div>
    </div>




</body>

</html>