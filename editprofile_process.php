<?php

$name = $_POST['uname'];
$phone = $_POST['telp'];
$email = $_POST['mail'];

session_start();
$conn = "mysql:host=localhost;dbname=printerest";
$pdo = new PDO($conn, "root", "");

// data dari form
$id = $_SESSION['user_id'];

$sql = "UPDATE user SET user_name = ?, user_telephone = ?, 
        user_email = ?
        WHERE user_id = ?";

$result = $pdo->prepare($sql);
$result->execute([$name, $phone, $email, $id]);

header("Location: profile.php");
?>
