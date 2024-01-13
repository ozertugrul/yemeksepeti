<?php
session_start();
include("../baglan.php");

if (isset($_SESSION['username'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `dukkanlar` WHERE `dukkan_id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Dükkan Başarıyla Silindi";
    } else {
        echo "Hata: Dükkanda Ürün Bulunduğu İçin Silinemedi";
    }
} else {
    session_destroy();
    
    header("Location: index.php");
}
?>