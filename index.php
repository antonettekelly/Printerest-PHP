<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Printerest | Welcome Page</title>
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
if(!isset($_SESSION['user_id']) || $_SESSION['user_role'] != "customer"){
    // user belum login
    header('Location: login_customer.php');
}
?>

<style>
    body {
        margin: 13rem auto;
        width: 45%;
        background-color: #3E497A;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    h1 {
        font-weight: bold;
        color: #E5E5E5;
    }

    h2 {
        color: #FFBB3A;
        font-size: 20px;
        margin-bottom: 30px;
        font-style: italic;
    }

    a.btn-light {
        font-size: 20px;
    }
</style>

<body>
    <div class="container-box">
        <div class="text-center">
            <img class="mb-2" src="assets/logo2.png" alt="" width="120" height="90">
        </div>
        <br>
        <h1>Welcome to Printerest</h1>
        <h2>Printing for the Interested</h2>
    </div>

    <!-- Direct to Home for Customer  -->
    <?php if($_SESSION['user_role'] == "customer"): ?>
    <a href="homeafter.php" class="btn btn-lg btn-light" type="submit">Next</a>
    <?php endif; ?>
</body>

</html>