<?php
include("../baglan.php");
session_start();
// Oturumda kullanıcı adı kontrolü
if (isset($_SESSION['username'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `urunler` WHERE `UrunID` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Ürün Başarıyla Silindi";
    } else {
        echo "Hata: Silinemedi";
    }

} else 
    {
    session_destroy();
    // Eğer POST isteği yoksa, bir hata mesajı yazdır
    header("Location: index.php");
    
    }
?>