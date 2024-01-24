<?php
include("../baglan.php");
session_start();
// Oturumda kullanıcı adı kontrolü
if (isset($_SESSION['username'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `urunler` WHERE `UrunID` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Lütfen Bekleyiniz.";
        echo '<script>alert("Ürün Başarıyla Silindi.");</script>';
                echo '<script>
                  setTimeout(function() {
                      window.location.href = "sehirsec.php";
                  }, 1000); // 1    seconds
              </script>';
    } else {
        echo "Lütfen Bekleyiniz.";
        echo '<script>alert("Ürün Silinemedi Yeniden Deneyiniz.");</script>';
                echo '<script>
                  setTimeout(function() {
                      window.location.href = "sehirsec.php";
                  }, 1000); // 1    seconds
              </script>';
    }

} else 
    {
    session_destroy();
    header("Location: index.php");
    }
?>