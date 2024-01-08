<?php

session_start();

session_unset(); // Oturum değişkenlerini temizle
session_destroy();



echo ("ÇIKTIN AMCIK");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=" index.php">
ANASAYFA
</a>
</body>
</html>

