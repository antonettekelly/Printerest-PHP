<!-- Password Encryption -->
<?php
$text = "Admin3";
$encrypted_text = password_hash($text, PASSWORD_BCRYPT);

echo "Encrypted Password : <br>";
echo $encrypted_text;
?>