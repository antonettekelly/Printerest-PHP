<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != "customer") {
    header('Location: login_customer.php');
}
$id = $_SESSION['user_id'];
$conn = "mysql:host=localhost;dbname=printerest";
$pdo = new PDO($conn, "root", "");

$sql = "SELECT * FROM user WHERE user_id = ?";

$result = $pdo->prepare($sql);
$result->execute([$id]);
$row = $result->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Profile</title>
    <link rel="icon" href="assets/logoOnly.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<!-- end of head-->


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
        /* font-size:20px; */
    }

    .btn-lg {
        background: #21325E;
        margin-bottom: 20px;
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
        text-align: center;
        color: #3E497A;
        font-size: 35px;
        font-weight: 550;
        margin-bottom: 30px;
    }

    h2 {
        color: #21325E;
        font-weight: 550;
        font-size: 20px;
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

    p.profile {
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link vector active" href="profile.php">
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

    <div class="container mt-5">
        <h1 class="text-center">Edit Profile</h1>

        <form action="editprofile_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['user_id'] ?>">
            <div class="form-group">
                <label for="admin">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="uname" value="<?php echo $row['user_name'] ?>" required>
                <div class="invalid-feedback">
                    Please enter your full name.
                </div>
            </div>
            <div class="form-group">
                <label for="admin">Phone Number</label>
                <input type="text" class="form-control" placeholder="Phone Number" name="telp" value="<?php echo $row['user_telephone'] ?>" required>
                <div class="invalid-feedback">
                    Please enter your phone number.
                </div>
            </div>
            <div class="form-group">
                <label for="admin">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="mail" value="<?php echo $row['user_email'] ?>" required>
                <div class="invalid-feedback">
                    Please enter your e-mail address.
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success" id="saveBtn" style="font-size: 20px; font-weight: 550">Save</button>
                <a href="profile.php" type="button" class="btn btn-info" style="font-size: 20px; font-weight: 550">Back</a>
            </div>
        </form>
    </div>

    <!-- partial // jquery & javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'>
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        // form validation

        // $("#saveBtn").click(function() {

        //     //fetch form to apply custom Bootstrap validation
        //     var form = $("#editForm")

        //     if (form[0].checkValidity() === false) {
        //         event.preventDefault()
        //         event.stopPropagation()
        //     }

        //     form.addClass('was-validated');
        // })
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