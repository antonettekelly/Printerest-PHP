<?php
$source = "mysql:host=localhost;dbname=printerest";
$conn = new PDO($source, "root", "");

$sql = "DELETE FROM user WHERE user_id = ?";

$result = $conn -> prepare($sql);
$result -> execute([$_GET['user_id']]);

header("Location: admin.php");
?>