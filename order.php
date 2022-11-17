<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Order</title>
    <link rel="icon" href="assets/logoOnly.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<!-- end of head-->

<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != "customer") {
    header('Location: login_customer.php');
}
?>

<?php
$conn = "mysql:host=localhost;dbname=printerest";
$pdo = new PDO($conn, "root", "");

$sql = "SELECT * FROM product WHERE product_id = ?";

$result = $pdo->prepare($sql);
$result->execute([$_GET['product_id']]);

$row = $result->fetch();
?>

<style>
    html {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #F0F0F0;
        margin: 0;
        padding: 0;
    }

    /* navigation */
    nav {
        background: #3E497A;
        min-height: 85px;
    }

    .navbar-light .navbar-nav .nav-link {
        display: block;
        color: #F0F0F0;
        font-size: 15px;
        margin-left: 30px;
        font-weight: 550;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active {
        color: #FFBB3A;
    }

    /* button */
    label {
        color: #21325E;
        font-weight: 550;
    }

    .btn-lg {
        background: #21325E;
        margin-bottom: 20px;
    }

    .btn-dark {
        background-color: #21325E;
        font-weight: 550;
        color: #F0F0F0;
    }

    /* image */
    .logo {
        width: 100px;
        height: 70px;
    }

    .foot {
        margin-top: 80px;
        margin-bottom: 30px;
        height: 115px;
    }

    /* text */
    h1 {
        padding: 0 1%;
        color: #3E497A;
        font-size: 30px;
        font-weight: 550;
        text-align: center;
    }

    h1.prod {
        color: #00000075;
        font-size: 20px;
    }

    h3,
    h4 {
        padding: 0 1%;
        color: #3E497A;
        font-size: 20px;
        font-weight: 550;
    }

    h4.ft {
        color: #F0F0F0;
        text-decoration: underline;
    }

    p {
        margin-top: 15px;
        font-family: inherit;
        font-size: 13px;
        text-align: justify;
        font-weight: 550;
        color: #21325E;
    }

    p.text-center {
        margin-top: 13px;
        color: #21325E;
        font-weight: bold;
        font-size: 17px;
    }

    a {
        color: #F0F0F0;
    }

    a:-webkit-any-link {
        cursor: pointer;
        text-decoration: none;
    }

    /* divider */
    hr.style1 {
        border-top: 1px solid #21325E;
    }

    .desc {
        border: 1px #21325E solid;
        box-shadow: 3px 5px 5px #00000067;
    }

    /* card */
    .card {
        box-shadow: 3px 5px 5px #00000067;
    }

    /* form */
    label {
        color: #3E497A;
        font-weight: 550;
    }

    .form-control {
        background-color: #F0F0F0;
        border-radius: 0%;
        border: 1px #000000 solid;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 15px;
        font-weight: 550;
        color: #21325E;
        height: calc(2.75rem + 2px);
        box-shadow: 3px 5px 5px #00000067;
    }

    /* upload image */
    #upload {
        opacity: 0;
    }

    #upload-label {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area {
        border: 2px dashed #21325E;
        padding: 1rem;
        position: relative;
    }

    .image-area::before {
        content: 'Uploaded image result';
        color: #21325E;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area img {
        z-index: 2;
        position: relative;
    }

    /* responsive */
    @media all and (max-width: 768px) {
        .container {
            width: 95%;
        }
    }

    @media all and (min-width: 768px) {
        .container {
            width: 768px;
        }
    }

    @media all and (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media all and (max-width:450px) {
        .col {
            display: block;
            width: 95%;
            padding: 0;
            margin: 0 auto;
        }
    }

    /* footer */
    footer {
        background: #3E497A;
        color: #F0F0F0;
        margin-top: 70px;
    }

    footer a {
        color: #F0F0F0;
        font-size: 14px;
        transition-duration: 0.2s;
    }

    /* footer a:hover {
        color: #FFBB3A;
        text-decoration: none;
    } */

    .copy {
        font-size: 12px;
        padding: 10px;
        border-top: 1px solid #F0F0F0;
    }

    .footer-middle {
        padding-top: 2em;
        color: #F0F0F0;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
            <div class="container">
                <a class="navbar-brand" href="homeafter.php">
                    <img class="logo" src="assets/logo2.png" />
                </a>

                <!-- collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav pull-left">
                        <li class="nav-item">
                            <a class="nav-link" href="homeafter.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link vector" href="profile.php">
                                <i class="fa fa-user-circle-o fa-2x"></i></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link vector" href="order_history.php">
                                <i class="fa fa-shopping-cart fa-2x"></i></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end of header-->

    <div class="container" style="margin-top:70px;">
        <div class="row">
            <div class="col-sm-6 mb-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo $row['product_photo'] ?>">
                </div>

                <h3 style="font-size: 25px; margin-top:20px">Deskripsi Produk</h3>
                <!-- divider -->
                <!-- <hr class="style1"> -->
                <div class="desc">
                    <div class="text" style="margin: 10px;">
                        <p><?php echo $row['product_desc'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <h3>Product Order Details</h3>
                <hr class="style1">
                <form action="order_process.php" method="post" id="orderform" novalidate="">
                    <input type="hidden" name="productid" value="<?php echo $row['product_id'] ?>">
                    <div class="form-group">
                        <label for="order">Product Name</label>
                        <input class="form-control" type="text" placeholder="Product Name" name="productname"
                            value="<?php echo $row['product_name'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="order">Product Category</label>
                        <input class="form-control" type="text" placeholder="Product Category" name="productcat"
                            value="<?php echo $row['product_category'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="order">Product Size</label>
                        <input class="form-control" type="text" placeholder="Product Size" name="productsize"
                            value="<?php echo $row['product_size'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="order">Product Price</label>
                        <input class="form-control" type="number" placeholder="Product Price" name="productprice"
                            value="<?php echo $row['product_price'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="order">Product Stock</label>
                        <input class="form-control" type="number" placeholder="Product Quantity" name="productquantity"
                            value="<?php echo $row['product_quantity'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="order">Customer Name</label>
                        <input type="text" class="form-control" placeholder="Customer Name" name="customer" required>
                        <div class="invalid-feedback">
                            Please enter your name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="order">Order Quantity</label>
                        <input class="form-control" type="number" placeholder="Order Quantity" name="orderquantity"
                            value="0" id="inputorderqty" required />
                        <div class="invalid-feedback">
                            Please enter the product quantity.
                        </div>
                    </div>
                    <input type="hidden" name="productquantity" value="<?php echo $row ['product_quantity'] ?>"
                        id="inputproductqty" />
                    <div class="alert alert-danger mt-3" style="display:none;" role="alert" id="alertquantity">
                        The number of products ordered exceeds the amount of stock available.
                    </div>
                    <div class="form-group">
                        <label for="order">Customer Address</label>
                        <input class="form-control" type="text" placeholder="Customer Address" name="address" value=""
                            required />
                        <div class="invalid-feedback">
                            Please enter your home address.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="order">Delivery Method</label>
                        <select class="form-control" name="deliveryopt" style="color: #6c757d;" required>
                            <option class="opt" value="">Select Option</option>
                            <option>Delivery</option>
                            <option>Self Pick-Up</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select the delivery method.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="order">Payment Method</label>
                        <select class="form-control" name="paymentopt" style="color: #6c757d;" required>
                            <option class="opt" value="">Select Option</option>
                            <option>Cash</option>
                            <option>Bank</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select the payment method.
                        </div>
                    </div>

                    <!-- upload design | FIX -->
                    <!-- <div class="design text-center" style="margin-top: 30px">
                        <h1 style="text-shadow: 1px 3px 3px #00000034;">Upload Design Anda Disini</h1>
                    </div>
                    <div class="form-group">
                        <input type="file" name="photo" class="form-control" required />
                        <div class="invalid-feedback">
                            Please submit your design.
                        </div>
                    </div> -->

                    <!-- upload design -->
                    <!-- <div class="design text-center" style="margin-top: 50px">
                        <h1 style="text-shadow: 1px 3px 3px #00000034;">Upload Design Anda Disini</h1>-->

                    <!-- Upload image input-->
                    <!-- <div class="input-group mb-3 px-2 py-2 rounded-pill shadow-sm mt-3"
                            style="background: #d8d4d4;">
                            <input id="upload" type="file" name="photo" onchange="readURL(this);"
                                class="form-control border-0" required>
                            <label id="upload-label" for="upload" class="font-weight-light text-muted"
                                style="color: rgba(0, 0, 0, 0.199);">Select File</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                                    <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                    <small class="text-uppercase font-weight-bold text-muted">Select file</small>
                                </label>
                            </div>
                            <div class="invalid-feedback">
                                Please submit your design.
                            </div>
                        </div> -->

                    <!-- Uploaded image area-->
                    <!-- <p class="text-center mt-2">Design Preview</p>
                    <div class="image-area mt-3">
                        <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                    </div> -->
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="text-center">
                <!-- <button type="submit" class="btn btn-dark btn-lg px-5" onclick="checkStock()">Tambah Ke
                    Keranjang</button> -->
                <a type="button" class="btn btn-lg btn-dark px-5" onclick="checkStock()" style="color:#F0F0F0">Tambah Ke
                    Keranjang</a>
            </div>
        </div>
        </form>
    </div>
    </div>

    <!-- partial // jquery & javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        var form = document.getElementById("orderform");
        var stock = document.getElementById("inputproductqty");
        var qty = document.getElementById("inputorderqty");
        var alert = document.getElementById("alertquantity");

        function checkStock() {
            if (parseInt(stock.value) < parseInt(qty.value)) {
                alert.style.display = "block";
            } else {
                form.submit();
            }
        }

        // // form validation
        // $(document).ready(function () {
        //     $("#orderBtn").click(function () {

        //         //fetch form to apply custom Bootstrap validation
        //         var form = $("#orderform")

        //         if (form[0].checkValidity() === false) {
        //             event.preventDefault()
        //             event.stopPropagation()
        //         }

        //         form.addClass('was-validated');
        //     })
        // })

        // show uploaded image
        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();

        //         reader.onload = function (e) {
        //             $('#imageResult')
        //                 .attr('src', e.target.result);
        //         };

        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }

        // $(function () {
        //     $('#upload').on('change', function () {
        //         readURL(input);
        //     });
        // });

        // // show uploaded image name
        // var input = document.getElementById('upload');
        // var infoArea = document.getElementById('upload-label');

        // input.addEventListener('change', showFileName);

        // function showFileName(event) {
        //     var input = event.srcElement;
        //     var fileName = input.files[0].name;
        //     infoArea.textContent = 'File name: ' + fileName;
        // }
    </script>
</body>
<!-- end of body -->

<!-- footer -->
<footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="margin-bottom: 5px">
                    <!--Column 1-->
                    <div class="footer-pad">
                        <img class="foot" src="assets/logo2.png" />
                    </div>
                </div>

                <div class="col-sm-3">
                    <!--Column 2-->
                    <div class="footer-pad">
                        <h4 style="color:#F0F0F0; text-decoration:underline; font-size:24px">Contact Us</h4>
                        <p style="color:#F0F0F0">
                            <b style="color:#FFBB3A">Opening Hours</b><br>
                            <b style="color:#B3C9E7">Monday to Saturday</b><br>
                            08.00-23.00<br>
                            <b style="color:#B3C9E7">Sunday</b><br>
                            10.00-23.00
                        </p>
                        <p style="color:#F0F0F0">
                            <b style="color:#FFBB3A">Telephone</b><br>
                            +62 2158 9397<br>
                            <b style="color:#FFBB3A">WhatsApp (Text Only)</b><br>
                            +62 8395 9364 072<br>
                            <b style="color:#FFBB3A">E-mail</b><br>
                            printerest.id@gmail.com
                        </p>
                        <!-- <ul class="list-unstyled">
                    <li><a href="#">Website Tutorial</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Disclaimer</a></li>
                  </ul> -->
                        <br>
                    </div>
                </div>

                <div class="col-sm-5">
                    <!--Column 3-->
                    <div class="footer-pad">
                        <h4 style="color:#F0F0F0; text-decoration:underline; font-size:24px; text-align: end">About Us</h4>
                        <p style="color:#F0F0F0">
                            Printerest was created in 2022, on the principle of service, strives to exceed client
                            expectations in terms of printing quality. Our dedication to excellence extends beyond
                            the final product's quality. Encourage customer loyalty. We cultivate relationships,
                            anticipate and prevent problems, adhere to deadlines, and work as an extension of our
                            customers' teams.
                        </p>
                        <!-- <ul class="list-unstyled">
                    <li><a href="#">Website Tutorial</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Disclaimer</a></li>
            </ul> -->
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div style="height: 34px; background: #FFBB3A">
        <p class="text-center">Copy&copy; 2022 Printerest.co.id</p>
    </div>
</footer>

</html>