<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Sign Up</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logoOnly.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/457a315592.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

    .container-box {
        align-items: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .section .container {
        padding: 10px 0 30px 0;
    }

    .card {
        background-color: white;
        border-radius: 20px;
    }

    .row {
        margin: 0;
    }

    /* navigation */
    /* nav {
        background: #3E497A;
        min-height: 85px;
    } */

    .navbar-dark .navbar-nav .nav-link {
        display: block;
        color: #F0F0F0;
        font-size: 15px;
        margin-left: 25px;
        font-weight: 550;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link.active,
    .nav-link1.active,
    .nav-link1:hover {
        color: #FFBB3A;
    }

    .nav-link1 {
        text-decoration: none;
        color: #3e497a;
        font-weight: 550;
    }

    .nav-link1:hover {
        text-decoration: none;
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

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
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

    a.have {
        text-align: center;
        font-size: small;
        color: #3e497a;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    a.have:hover {
        color: #FFBB3A;
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
        color: #F0F0F0;
        font-weight: bold;
        font-size: 17px;
    }

    /* form */
    .form-signup {
        width: 500px;
        border-radius: 10px;
        background-color: white;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signup .checkbox {
        font-weight: 400;
    }

    .form-signup .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signup .form-control:focus {
        z-index: 2;
    }

    .form-signup input[type="email"] {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signup input[type="password"] {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-signup input[type="text"] {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-signup input[type="number"] {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .float-left {
        margin-left: 30px;
    }

    .forminput input {
        padding: 6px 10px;
        background-color: transparent;
        border: 3px solid #3e497a;
        color: #3e497a;
        font-size: 15px;
    }

    .form-control {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #21325E;
    }

    .forminput select {
        padding: 6px 10px;
        background-color: transparent;
        border: 3px solid #3e497a;
        color: #3e497a;
        font-size: 15px;
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="assets/logo2.png" />
                </a>
            </div>
        </nav>
    </header>
    <!-- end of header-->

    <form action="signupad_process.php" method="post" id="SignUpForm" novalidate="">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mx-5 my-5">
                    <div class="container-box">
                        <div class="text-center">
                            <img class="mb-2" src="assets/logo.png" alt="" width="120" height="90">
                        </div>
                        <br>

                        <div class="float-left mt-2 mb-2 mx-5">
                            <a class="nav-link1" href="login_admin.php">Log In</a>
                            <a class="nav-link1" href="#">|</a>
                            <a class="nav-link1 active" href="signup_admin.php">Sign Up</a>
                        </div>

                        <div class="forminput mx-5" style="margin-top: 40px">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Full Name*" name="uname"
                                    required />
                                <div class="invalid-feedback">
                                    Please enter your full name.
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Phone Number*" name="telp"
                                    required />
                                <div class="invalid-feedback">
                                    Please enter your telephone.
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="E-mail Address*" name="mail"
                                    required />
                                <div class="invalid-feedback">
                                    Please enter your e-mail address.
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Set A Password*" name="pass"
                                    required />
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-lg btn-secondary" id="SignUpBtn">Sign Up</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

    <!-- partial // jquery & javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script>
        $(document).ready(function () {
            $("#SignUpBtn").click(function () {

                //fetch form to apply custom Bootstrap validation
                var form = $("#SignUpForm")

                if (form[0].checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
            })
        })
    </script>
</body>
<!-- end of body-->

<!-- footer -->
<footer class="mainfooter bg-dark" role="contentinfo">
    <!-- <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="margin-bottom: 5px">
                    Column 1
                    <div class="footer-pad">
                        <img class="foot" src="assets/logo2.png" />
                    </div>
                </div>

                <div class="col-sm-4">
                    Column
                    <div class="footer-pad">
                        <h4>Contact Us</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <ul class="list-unstyled">
                      <li><a href="#">Website Tutorial</a></li>
                      <li><a href="#">Accessibility</a></li>
                      <li><a href="#">Disclaimer</a></li>
                    </ul>
                        <br>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="footer-pad">
                        <h4 style="text-align: end;">About Us</h4>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <ul class="list-unstyled">
                      <li><a href="#">Website Tutorial</a></li>
                      <li><a href="#">Accessibility</a></li>
                      <li><a href="#">Disclaimer</a></li>
              </ul>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- copyright -->
    <div style="height: 34px">
        <p class="text-center">Copy&copy; 2022 Printerest.co.id</p>
    </div>
</footer>

</html>