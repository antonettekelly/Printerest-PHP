<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Admin</title>
    <link rel="icon" href="assets/logoOnly.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

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

    label {
        color: #21325E;
        font-weight: 550;
    }

    /* navigation */
    .navbar-dark .navbar-nav .nav-link {
        color: #F0F0F0;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: #FFBB3A;
    }


    /* sidebar */
    .sidebar {
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
        }
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #21325E;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #999;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
        color: #FFBB3A;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /* image */
    .logo {
        width: 100px;
        height: 70px;
    }

    .foot {
        margin-top: 30px;
        margin-bottom: 30px;
        height: 115px;
    }

    /* text */
    h1 {
        text-align: center;
        color: #3E497A;
        font-size: 35px;
        font-weight: 550;
        margin-bottom: 30px;
    }

    h1.ad {
        color: #E5E5E5;
    }

    h4 {
        margin-bottom: 15px;
        font-family: inherit;
        text-align: justify;
        font-weight: 550;
        text-decoration: underline;
        color: #F0F0F0;
    }

    p {
        margin-top: 15px;
        font-family: inherit;
        font-size: 13px;
        text-align: justify;
        font-weight: 550;
        color: #F0F0F0;
    }

    p.text-center {
        margin-top: 13px;
        color: #21325E;
        font-weight: bold;
        font-size: 17px;
    }

    /* divider */
    hr.style1 {
        border-top: 1px solid #21325E;
    }

    /* button */
    .btn-outline-dark {
        background-color: #21325E;
        font-weight: 550;
        font-size: 15px;
        color: #F0F0F0;
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
</style>

<body>
    <header>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <div class="container">
                <a class="navbar-brand" href="admin_product.php">
                    <img class="logo" src="assets/logo2.png" />
                    <a class="navbar-brand col-sm-6" href="#">Admin Page</a>
                </a>
            </div>
        </nav>
    </header>
    <div class="container-fluid mt-5">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_cust.php">
                                <i class="fa fa-user-circle fa-1x"></i></i>
                                Customer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">
                                <i class="fa fa-users fa-1x"></i></i>
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin_product.php">
                                <i class="fa fa-shopping-cart fa-1x"></i></i>
                                Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_order.php">
                                <i class="fa fa-list fa-1x"></i></i>
                                Order
                            </a>
                        </li>
                    </ul>
            </nav>

            <div class="container text-left" style="margin-top: 70px; margin-bottom: 70px;">
                <div class="container text-center">
                    <?php
            date_default_timezone_set("Asia/Jakarta");
            echo "The time is " . date("h:i:sa");
            ?>
                </div>
                <div class="col mt-3">
                    <h1>
                        Insert New Product
                    </h1>
                    <div>
                        <form action="addproduct_process.php" method="post" enctype="multipart/form-data" id="addForm"
                            novalidate="">
                            <div class="form-group">
                                <label for="prdct">Product Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="productname" required>
                                <div class="invalid-feedback">
                                    Please enter the product name.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Category</label>
                                <input type="text" class="form-control" placeholder="Category" name="productcategory"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter the product category.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Image</label>
                                <input type="file" name="photo" class="form-control form-control-block"
                                    style="height: calc(2.5rem + 2.25px);" required />
                                <div class="invalid-feedback">
                                    Please enter the product image.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Description</label>
                                <textarea class="form-control" rows="3" name="productdesc" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter the product description.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Size</label>
                                <select class="form-control" name="productsize" required>
                                    <option class="opt" value="">Select Option</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select the product size.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Quantity</label>
                                <input type="number" class="form-control" name="productquantity" required>
                                <div class="invalid-feedback">
                                    Please select the product quantity.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prdct">Product Price</label>
                                <input type="number" class="form-control" name="productprice" required>
                                <div class="invalid-feedback">
                                    Please select the product price.
                                </div>
                            </div>

                            <div class="container text-center">
                                <button type="submit" class="btn btn-primary" id="addBtn"
                                    style="font-weight: 550;">Add</button>
                                <a href="admin_product.php" class="btn btn-info" name="back"
                                    style="font-weight: 550;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- partial // jquery & javascript -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'>
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script>
                // form validation
                $("#addBtn").click(function () {

                    //fetch form to apply custom Bootstrap validation
                    var form = $("#addForm")

                    if (form[0].checkValidity() === false) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.addClass('was-validated');
                })
            </script>
</body>

</html>