<!doctype html>
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

<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != "admin") {
    header('Location: index.php');
}
?>

<?php
require "conn.php";

$sql = "SELECT * FROM `order`";

$conn = getconn();
$result = $conn->prepare($sql);
$result->execute();
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
                <a class="navbar-brand" href="admin_order.php">
                    <img class="logo" src="assets/logo2.png" />
                    <a class="navbar-brand col-sm-3 col-md-1 mr-0 ml-4" href="#.php">Admin Page</a>
                </a>
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="logout_admin.php"
                            onclick="return confirm('Are you sure you want to log out from your account?')">Log Out</a>
                    </li>
                </ul>
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
                            <a class="nav-link" href="admin_product.php">
                                <i class="fa fa-shopping-cart fa-1x"></i></i>
                                Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="admin_order.php">
                                <i class="fa fa-list fa-1x"></i></i>
                                Order
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container text-center" style="margin-top: 70px; margin-bottom: 70px;">

                <?php
            date_default_timezone_set("Asia/Jakarta");
            echo "The time is " . date("h:i:sa");
            ?>

                <div class="col mt-3">
                    <table class="table table-striped table-hover table-responsive">
                        <h1>List of Orders</h1>
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">User ID</th>
                                <th scope="col">Customer Name</th>
                                <!-- <th scope="col">Order Design</th> -->
                                <th scope="col">Order Address</th>
                                <th scope="col">Delivery Method</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Order Quantity</th>
                                <th scope="col">Total Price</th>
                            </tr>

                            <?php
                        $x = 1;
                        while ($row = $result->fetch()) :
                        ?>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $row['order_id']; ?></th>
                                <td>
                                    <?php echo $row['product_id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['user_id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['customer_name']; ?>
                                </td>
                                <!-- <td>
                                    php echo $row['order_design'];
                                </td> -->
                                <td>
                                    <?php echo $row['order_address']; ?>
                                </td>
                                <td>
                                    <?php echo $row['order_deliveryopt']; ?>
                                </td>
                                <td>
                                    <?php echo $row['order_paymentopt']; ?>
                                </td>
                                <td>
                                    <?php echo $row['order_quantity']; ?>
                                </td>
                                <td>
                                    <?php echo $row['order_totalprice']; ?>
                                </td>
                            </tr>

                            <?php
                            $x++;
                        endwhile;
                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script>
        $(document).ready(function () {
            setInterval(timestamp, 1000);
        });

        function timestamp() {
            $.ajax({
                url: 'localhost/timestamp.php',
                success: function (data) {
                    $('#timestamp').html(data);
                },
            });
        }
    </script>
</body>
<!-- end of body-->

</html>