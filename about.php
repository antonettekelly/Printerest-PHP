<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | About</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logoOnly.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
        background-color: #FFBB3A;
        margin: 0;
        padding: 0;
    }

    .about {
        margin: 0;
        padding: 0;
        background-color: #D8D8D8;
    }

    /* navigation */
    nav {
        background: #3E497A;
        /* min-height: 85px; */
    }

    .navbar-light .navbar-nav .nav-link {
        display: block;
        color: #F0F0F0;
        font-size: 15px;
        margin-left: 25px;
        font-weight: 550;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link.active,
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
        margin-top: 80px;
        margin-bottom: 30px;
        height: 115px;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    i {
        color: white;
    }

    .card {
        border: none;
        background-color: #D8D8D8;
    }

    /* text */
    h1 {
        padding: 0 1%;
        text-align: center;
        color: #3E497A;
        margin-top: 50px;
        font-size: 35px;
        font-weight: 550;
        margin-bottom: 20px;
    }

    h1.ad {
        color: #E5E5E5;
    }

    h1.information {
        margin-top: 30px;
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

    p.info {
        font-size: 15px;
        color: black;
    }

    p.text-center {
        margin-top: 13px;
        color: #21325E;
        font-weight: bold;
        font-size: 17px;
    }

    /* text */
    h3 {
        margin-bottom: 15px;
        font-family: inherit;
        font-weight: 550;
        color: #21325E;
        text-align: justify;
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

    p.card-text {
        margin-left: 10px;
        color: black;
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
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link vector" href="profile.php">
                                <i class="fa fa-user-circle-o fa-2x"></i></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link vector" href="payment.php">
                                <i class="fa fa-shopping-cart fa-2x"></i></i>
                            </a> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end of header-->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center" style="margin-top: 50px; margin-bottom: 50px">
                    <div class="card mb-3">
                        <img class="card-img-top" src="assets/logo2.png"
                            style="background-color: #D8D8D8; border: none">
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 style="color: #21325E;">About Printerest</h1>
                    <p class="info">
                        Printerest was created in 2022, on the principle of service, strives to exceed client
                        expectations in terms of printing quality. Our dedication to excellence extends beyond
                        the final product's quality. Encourage customer loyalty. We cultivate relationships,
                        anticipate and prevent problems, adhere to deadlines, and work as an extension of our customers'
                        teams.
                    </p>
                    <p class="info" style="margin-top: 5px; margin-bottom: 50px">
                        Printerest was founded with the goal of providing 'Instant Print and Print on Demand
                        Services.
                        This involves printing name cards, letterheads, envelopes, corporate profiles, brochures,
                        leaflets, and other office stationery.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <h1 style="color: #21325E;">Vision</h1>
                <p class="info">
                    Printerest provide solutions with premium and good quality printing results according to
                    international standards to old and new customers for their satisfaction and also ours.
                </p>
            </div>
            <div class="col-sm-6">
                <h1 style="color: #21325E;">Mission</h1>
                <p class="info">
                    Continuously improving the quality of employees internally and externally.
                    Continuous improvement of production, technology and management division.
                    Premium and superior quality production or prints at competitive prices and efficient service.
                    Orientation based on customer request.
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="about">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 mt-5 mb-5">
                    <div class="text-center">
                        <div class="icon">
                            <i class="fa fa-phone fa-3x"></i>
                        </div>
                        <h1 class="information">Phone</h1>
                        <p class="text-center">+62 2158 9397</p>
                    </div>
                </div>
                <div class="col-lg-3 mt-5 mb-5">
                    <div class="text-center">
                        <div class="icon">
                            <i class="fa fa-location-arrow fa-3x"></i>
                        </div>
                        <h1 class="information">Address</h1>
                        <p class="text-center">
                            Jl. Danau Agung XIV FG11 No.15, Kuta Jaya,
                            Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mt-5 mb-5">
                    <div class="text-center">
                        <div class="icon">
                            <i class="fa fa-clock-o fa-3x"></i>
                        </div>
                        <h1 class="information">Opening Hours</h1>
                        <p class="text-center">Monday to Saturday <br>
                            <b style="color:#3E497A">08.00-23.00</b><br><br>
                            Sunday<br>
                            <b style="color:#3E497A">10.00-23.00</b>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mt-5 mb-5">
                    <div class="text-center">
                        <div class="icon">
                            <i class="fa fa-envelope fa-3x"></i>
                        </div>
                        <h1 class="information">Email</h1>
                        <p class="text-center">Printerest.id@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2" style="align-items: center">
        <div class="card mb-3 mx-auto" style="margin-top: 30px; height: 300px; background-color: #F0F0F0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.722413809799!2d106.56857441430977!3d-6.167913862161929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff3d028f1543%3A0x6e5c01f0d4e3c7!2sMY%20HOME!5e0!3m2!1sen!2sid!4v1653309857011!5m2!1sen!2sid"
                height="200" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <div class="card-body">
                <h3 class="card-title" style="margin-left: 10px; margin-top: 15px">Our Address</h4>
                    <p class="card-text">
                        Jl. Danau Agung XIV FG11 No.15, Kuta Jaya, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560
                    </p>
            </div>
        </div>
    </div>

    <!-- partial // jquery & javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
</body>
<!-- end of body-->
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