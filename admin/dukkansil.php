<?php
session_start();
include("../baglan.php");

if (isset($_SESSION['username'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `dukkanlar` WHERE `dukkan_id` = $id";
    if ($conn->query($sql) === TRUE) {

        echo "Lütfen Bekleyiniz.";
        echo '<script>alert("Dükkan Başarıyla Silindi.");</script>';
                echo '<script>
                  setTimeout(function() {
                      window.location.href = "sehirsec.php";
                  }, 1000); // 1    seconds
              </script>';
    } else {
       
        echo "Lütfen Bekleyiniz.";
        echo '<script>alert("Hata: Dükkanda Ürün Bulunduğu İçin Silinemedi.");</script>';
                echo '<script>
                  setTimeout(function() {
                      window.location.href = "sehirsec.php";
                  }, 1000); // 1    seconds
              </script>';
    }
} else {
    session_destroy();
    
    header("Location: index.php");
}
?>