<?php
session_start();
$user_id = $_SESSION['user_id'];
$prod_id = $_POST['productid'];
$prod_name = $_POST['productname'];
$prod_cat = $_POST['productcat'];
$prod_size = $_POST['productsize'];
$prod_price = $_POST['productprice'];

$cust_name = $_POST['customer'];
$ord_qty = $_POST['orderquantity'];
$address = $_POST['address'];

date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d h:i:s");

$delivery = $_POST['deliveryopt'];
$payment = $_POST['paymentopt'];

$prod_qty = $_POST['productquantity'] - $ord_qty;
$order_total = $_POST['productprice'] * $ord_qty;

$conn = new PDO("mysql:host=localhost;dbname=printerest", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql1 = "UPDATE product SET product_name = '$prod_name', 
        product_category = '$prod_cat', 
        product_size = '$prod_size', 
        product_quantity = '$prod_qty' WHERE product_id = '$prod_id'";

$sql2 = "INSERT INTO `order` ( product_id, user_id ,customer_name, order_address, order_date, order_deliveryopt, order_paymentopt, 
        order_quantity, order_totalprice) 
        VALUES ('$prod_id', '$user_id', '$cust_name', '$address','$date', '$delivery', '$payment', '$ord_qty', '$order_total');";

$conn->exec($sql1);
$conn->exec($sql2);
$conn = null;

header('Location: order_history.php');
?>