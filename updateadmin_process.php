<?php
// data dari form
$name= $_POST['uname'];
$phone = $_POST['telp'];
$email = $_POST['mail'];
$password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$role = $_POST['role'];

$conn = "mysql:host=localhost;dbname=printerest";
$pdo = new PDO($conn, "root", "");

$sql = "UPDATE user SET user_name = ?, user_telephone = ?, 
        user_email = ?, user_password = ?, user_role = ?
        WHERE user_id = ?";

$result = $pdo -> prepare($sql);
$result-> execute([$name, $phone, $email, $password, $role, $_POST['id']]);

header ("Location: admin.php");
?>