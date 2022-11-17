<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Frequently Asked Questions (FAQ)</title>
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

    .section .container {
        padding: 10px 0 30px 0;
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

    /* search */
    .form-control {
        display: block;
        width: 100%;
        height: calc(3.5em + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        font-weight: 550;
        color: #00000067;
        background-color: #F0F0F0;
        background-clip: padding-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        border: 1px #000000 solid;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        box-shadow: 3px 5px 5px #00000067;
    }

    .btn-outline-secondary {
        color: #F0F0F0;
        background-color: #21325E;
        font-weight: 550;
        box-shadow: 3px 5px 5px #00000067;
    }

    .search {
        margin-bottom: auto;
        margin-top: 200px;
        height: 70px;
        background-color: #F0F0F0;
        border: 1px #000000 solid;
        border-radius: 5px;
        padding: 10px
    }

    .search-input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        margin-top: 5px;
        caret-color: transparent;
        line-height: 40px;
        transition: width 0.4s linear
    }

    .search .search-input {
        padding: 0 10px;
        caret-color: #536bf6;
        font-size: 21px;
        font-weight: 300;
        color: black;
        transition: width 0.4s linear
    }

    .search:hover>.search-icon {
        background: #1A237E;
        color: #fff
    }

    .search-icon {
        height: 50px;
        width: 50px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #536bf6
    }

    a:link {
        text-decoration: none
    }

    .btn-outline-dark {
        /* padding: 20% 23%; */
        font-size: 15px;
        border-radius: 10px;
        border: #000000 3px solid;
    }

    .btn-link {
        color: #152140;
        font-weight: 550;
    }

    .btn-link:hover,
    .btn-link:focus {
        text-decoration: none;
    }

    /* accordion */
    .card-header {
        background-color: #F0F0F0;
        border-bottom: 0px;
    }

    /* text */
    h1 {
        padding: 0 1%;
        color: #3E497A;
        font-size: 30px;
        font-weight: 550;
        text-align: center;
    }

    h2 {
        padding: 0 1%;
        color: #00000067;
        font-weight: 550;
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

    p.pageTitle {
        color: #F0F0F0;
        font-weight: 550;
        font-size: 15px;
    }

    a {
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
            width: 95%;
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
                <p class="pageTitle">Pusat Bantuan</p>

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
                            <a class="nav-link" href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="faq.php">FAQ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link vector" href="profile.php">
                                <i class="fa fa-user-circle-o fa-2x"></i></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link vector" href="order_history.php">
                                <i class="fa fa-shopping-cart fa-2x"></i></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end of header-->

    <div class="container" style="margin-top: 50px;">
        <h1>How can Printerest help you?</h1>
        <div id="accordion" style="margin-top: 20px">
            <div class="card">

                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            How to order on Printerest?
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        You can order online with our website feature here in Printerest.com.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            What if I want to see samples or printouts from Printerest?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        You can come directly to our outlet, information is in the address column (bottom page).
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Can I order what I want if the product is not on the website?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        You can chat or email us at printerest.id@gmail.com by asking our Customer Service.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="false" aria-controls="collapseFour">
                            Can I create or modify an order that has already been processed?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        After we receive the payment, the order has been received. But before the final process, you can
                        still change or return to the beginning.
                        So, make sure to double-check all your order details before making a payment.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                            aria-expanded="false" aria-controls="collapseFive">
                            How do I pay for the products that I've bought?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        You can pay via our virtual account, which is notified on your website or email,
                        or transfer to our bank account as listed
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                            aria-expanded="false" aria-controls="collapseSix">
                            Does Printerest do delivery outside of Jakarta and Tangerang?
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Yes, we can. It is because shipping outside of Jakarta and Tangerang are managed by
                        using avaible courier services.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                            aria-expanded="false" aria-controls="collapseSeven">
                            How to return goods if its damaged?
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        If the goods that are received, are in a damaged condition, you can submit a complaint within a
                        maximum of 3 days after the item is received. You can email us at printerest.id@gmail.com, send
                        a photo of the damaged product and send it back to us, then we will reprint it at no additional
                        cost.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                            aria-expanded="false" aria-controls="collapseEight">
                            Can I get prints on other paper materials, other than those avaible on the website?
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        Yes, you can come to our offline outlet store for the possibility there is the material
                        you want or contact our offline store.
                    </div>
                </div>
            </div>
        </div>
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