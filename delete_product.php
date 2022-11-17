<?php
$source = "mysql:host=localhost;dbname=printerest";
$conn = new PDO($source, "root", "");

$sql = "DELETE FROM product WHERE product_id = ?";

$result = $conn -> prepare($sql);
$result -> execute([$_GET['product_id']]);

header("Location: admin_product.php");
?>