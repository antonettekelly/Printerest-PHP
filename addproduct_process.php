<?php
// data dari form
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

    $conn = new PDO("mysql:host=localhost;dbname=printerest", "root", "");
    $sql = "INSERT INTO product(product_name, product_category, product_photo,
                            product_desc, product_size, product_quantity, product_price) 
                            VALUES (?, ?, ?, ?, ?, ?, ?);";

    // $conn = getconn();
    $result = $conn->prepare($sql);
    $result->execute([$productname, $category, $tujuan, $desc,
                     $size, $quantity, $price]);

    header('Location: admin_product.php');
} else {
    echo "file tidak valid";
}
?>