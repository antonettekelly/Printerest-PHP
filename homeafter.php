<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Printerest | Home</title>
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
if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] != "customer"){
    header('Location: homebefore.php');
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

  .jumbotron-home {
    padding: 10rem 0rem;
    background: url(assets/home.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    overflow: hidden;
    color: white;
  }

  .jumbotron-ad {
    background: url('assets/ad1.png') center center no-repeat;
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

  .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    font-weight: 550;
    color: #21325E;
    background-color: #f0f0f0ad;
    background-clip: padding-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border: 1px #000000 solid;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }

  #specificSizeInputGroupUsername::placeholder {
    color: #21325E;
    font-weight: 550;
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
  .btn-primary-light {
    color: #f0f0f0ad;
    border: 1px #000000 solid;
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

  /* card */
  .card img {
    width: 100%;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav pull-left">
            <li class="nav-item">
              <a class="nav-link active" href="home.php">Home</a>
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

  <div class="jumbotron-home">
    <div class="container">
      <h1 style="color: #F0F0F0;">Harga Murah Kualitas Tidak Murahan</h1>
    </div>
  </div>

  <div class="py-2">
    <div class="container">
      <div class="row mt-5">
        <h1 style="float: left; margin-left: 20px;">Product Category</h1>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <div class="card mb-5">
            <img class="card-img-top" src="assets/products/pin pakaian.png">
            <div class="card-body">
              <h5 class="card-title">Merchandise</h5>
              <a href="merch_details.php" class="btn btn-outline-dark">Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-5">
            <img class="card-img-top" src="assets/products/pencil.png">
            <div class="card-body">
              <h5 class="card-title">Stationary</h5>
              <a href="stationary_details.php" class="btn btn-outline-dark">Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-5">
            <img class="card-img-top" src="assets/products/poster kanvas.png">
            <div class="card-body">
              <h5 class="card-title">Printing</h5>
              <a href="printing_details.php" class="btn btn-outline-dark">Details</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-5">
            <img class="card-img-top" src="assets/products/tas kertas.png">
            <div class="card-body">
              <h5 class="card-title">Screen Printing</h5>
              <a href="screenprt_details.php" class="btn btn-outline-dark">Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="product.php" type="button" class="btn btn-outline-dark btn-block"
          style="margin-right: 20px; font-size: 20px">See All Products</a>
      </div>
    </div>
  </div>

  <!-- divider -->
  <div class="container mt-5">
    <hr class="style1">
  </div>

  <!-- jumbotron -->
  <div class="container">
    <h1 style="margin-bottom: 10px;">Print Bersama Printerest</h1>
    <div class="jumbotron-ad vertical-center mt-2">
    </div>
  </div>
  </div>

  <!-- partial // jquery & javascript -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
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