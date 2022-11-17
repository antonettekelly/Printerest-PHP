<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Product</title>
    <link rel="icon" href="assets/logoOnly.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<?php
session_start();
if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] != "customer"){
    header('Location: login_customer.php');
}
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

    .section .container {
        padding: 10px 0 30px 0;
    }

    .jumbotron {
        background-color: #C4C4C4 !important;
    }

    .jumbotron-ad {
        background: url('assets/ad2.png') center center no-repeat;
        background-size: cover;
        border-radius: 20px;
        padding: 15rem 0rem;
        margin: 0;
    }

    .vertical-center {
        min-height: 300%;
        min-height: 300px;
        display: flex;
        align-items: center;
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
    .btn-lg {
        background: #21325E;
        margin-bottom: 20px;
        font-size: 15px;
    }

    /*sticky header position*/
    .sticky.is-sticky {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        z-index: 1000;
        width: 100%;
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

    /* columns */
    .col {
        float: left;
        padding: 0;
        margin: 0;
        position: relative;
    }

    /* text */
    h1 {
        padding: 0 1%;
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

    h5 {
        text-align: center;
        color: #00000073;
        font-weight: 550;
    }

    /* divider */
    hr.style1 {
        border-top: 1px solid #21325E;
    }

    /* button */
    .btn-outline-dark {
        background-color: #21325E;
        font-weight: 550;
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

<?php
require "conn.php";

$sql = "SELECT product_id, product_name, product_category, 
        product_photo, product_desc, product_size, product_price from product";
        
$conn = getconn();
$result = $conn->prepare($sql);
$result->execute();
?>

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

    <!-- jumbotron - ad -->
    <div class="container mt-5 mb-5">
        <div class="jumbotron-ad vertical-center">
        </div>
    </div>

    <div class="container">
        <h1>All Products</h1>
        <table class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Product Photo</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Desc</th>
                    <th scope="col">Product Size</th>
                    <!-- <th scope="col">Product Quantity</th> -->
                    <th scope="col">Product Price</th>
                    <th scope="col">Action</th>
                </tr>

                <?php
                            $x = 1;
                            while ($row = $result->fetch()) :
                            ?>

            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 550;"><?php echo $row['product_id'] ?></td>
                    <td>
                        <img src="<?php echo $row['product_photo'] ?>" style="max-width:200px;" />
                    </td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['product_category'] ?></td>
                    <td><?php echo $row['product_desc'] ?></td>
                    <td><?php echo $row['product_size'] ?></td>
                    <td><?php echo $row['product_price'] ?></td>
                    <td>
                        <a href="order.php?product_id=<?php echo $row['product_id'] ?>" type="button"
                            class="btn btn-sm btn-primary" style="border-color: #21325E; background:#21325E;">Buy</a>
                    </td>
                </tr>

                <?php
                $x++;
                endwhile;
                ?>

        </table>

        <div class="text-center mt-3 mb-3">
            <a href="homeafter.php" type="button" class="btn btn-lg btn-secondary btn-block"
                style="color: #F0F0F0; text-decoration: none; font-size: 20px">Back</a>
        </div>
    </div>

    <!-- partial // jquery & javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script>
        // sticky navbar
        $(document).ready(function () {
            // custom function which toggles between sticky class (is-sticky)
            var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                var stickyHeight = sticky.outerHeight();
                var stickyTop = stickyWrapper.offset().top;
                if (scrollElement.scrollTop() >= stickyTop) {
                    stickyWrapper.height(stickyHeight);
                    sticky.addClass("is-sticky");
                } else {
                    sticky.removeClass("is-sticky");
                    stickyWrapper.height('auto');
                }
            };

            // find all data-toggle="sticky-onscroll" elements
            $('[data-toggle="sticky-onscroll"]').each(function () {
                var sticky = $(this);
                // insert hidden element to maintain actual top offset on page
                var stickyWrapper = $('<div>').addClass('sticky-wrapper');
                sticky.before(stickyWrapper);
                sticky.addClass('sticky');

                // scroll & resize events
                $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                    stickyToggle(sticky, stickyWrapper, $(this));
                });

                // on page load
                stickyToggle(sticky, stickyWrapper, $(window));
            });
        });
    </script>
</body>
<!-- end of body-->

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
                        <h4>Contact Us</h4>
                        <p>
                            <b style="color:#FFBB3A">Opening Hours</b><br>
                            <b style="color:#B3C9E7">Monday to Saturday</b><br>
                            08.00-23.00<br>
                            <b style="color:#B3C9E7">Sunday</b><br>
                            10.00-23.00
                        </p>
                        <p>
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
                        <h4 style="text-align: end;">About Us</h4>
                        <p>
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