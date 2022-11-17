<?php
// data dari form
$name= $_POST['uname'];
$phone = $_POST['telp'];
$email = $_POST['mail'];
$password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
$role = "customer";

$conn = new PDO("mysql:host=localhost;dbname=printerest", "root","");

// 2.
$sql = "INSERT INTO user(user_name, user_telephone, user_email, user_password, user_role) VALUES (?, ?, ?, ?, ?)";

// 3. 
$result = $conn->prepare($sql);
$result->execute([$name, $phone, $email, $password, $role]);

// redirect
header('Location: login_customer.php');
?>