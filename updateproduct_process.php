<?php
$productname= $_POST['productname'];
$category= $_POST['productcategory'];
$photo = $_FILES['photo'];
$desc = $_POST['productdesc'];
$size = $_POST['productsize'];
$quantity = $_POST['productquantity'];
$price = $_POST['productprice'];

// dapatkan ekstensi file
$ext = explode(".", $photo['name']);
$ext = end($ext);
$ext = strtolower($ext);

// buat array yang berisi daftar ekstensi yang diperbolehkan
$ext_boleh = ['jpg', 'png', 'jpeg'];

// cek apakah file yang diupload memiliki ext yang valid
if(in_array($ext, $ext_boleh)){
    $sumber = $photo['tmp_name'];
    $tujuan = 'uploads/' . $photo['name'];
    move_uploaded_file($sumber, $tujuan);

$conn = "mysql:host=localhost;dbname=printerest";
$pdo = new PDO($conn, "root", "");

$sql = "UPDATE product SET product_name = ?, product_category = ? , 
        product_photo = ?,  product_desc = ?, product_size = ?,
        product_quantity =?, product_price =? 
        WHERE product_id = ?";

$result = $pdo -> prepare($sql);
$result-> execute([$productname, $category, $tujuan, $desc,
$size, $quantity, $price, $_POST['id']]);

header ("Location: admin_product.php");
}  else {
    echo "file tidak valid";
}
?>