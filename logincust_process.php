<?php
require "conn.php";
session_start();

// data dari form
$email = $_POST['mail'];
$password = $_POST['upass'];

$conn = new PDO("mysql:host=localhost;dbname=printerest", "root", "");

$sql = "SELECT * FROM user WHERE user_email = ?";

// 3.
$result = $conn->prepare($sql);
$result->execute([$email]);

// 4. 
if ($row = $result->fetch()) {
    // cek password apakah sesuai
    if (password_verify($password, $row['user_password'])) {
        // password cocok
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['user_id'] = $row['user_id'];
        // alert($_SESSION['user_id']);
        header('Location: index.php');
    } else {
        // login gagal
        header('Location: login_customer.php');
    }
} else {
    // login gagal
    header('Location: login_customer.php');
}
