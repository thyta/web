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
</body>

</html>