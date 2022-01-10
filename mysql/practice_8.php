<?php
/*$password = "Confirmationx%$";
$hashFormat = "2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password_encrypted = crypt($password, $hashF_and_salt);
echo $password_encrypted;*/

$password1 = "mysecretpassword";
$salt = "iusesomecrazystrings22";
$password_encrypted = crypt($password1, $salt);

echo $password_encrypted;


?>