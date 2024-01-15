<?php
session_start();

include("baglan.php");

if (!isset($_SESSION["KullaniciID"])) {
    echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
    echo '<script>
              setTimeout(function() {
                  window.location.href = "index.php";
              }, 2500); // 2 seconds
          </script>';
    exit();
    
  }

// Kullanıcı ID'sini session'dan al
$userId = $_SESSION["KullaniciID"];

// Formdan gelen verileri al
$yeniSifre = $_POST["yeniSifre"];
$yeniSifreTekrar = $_POST["yeniSifreTekrar"];

// Yeni şifre ve tekrarı aynı mı kontrol et
if ($yeniSifre == $yeniSifreTekrar) {
    // Yeni şifreyi hashle
    $hashliYeniSifre = password_hash($yeniSifre, PASSWORD_DEFAULT);

    // Veritabanında güncelleme sorgusu
    $updateSql = "UPDATE kullanicilar SET Sifre = '$hashliYeniSifre' WHERE KullaniciID = $userId";

    if ($conn->query($updateSql) === TRUE) {
        echo "Şifre başarıyla güncellendi.";
    } else {
        echo "Güncelleme hatası: " . $conn->error;
    }
} else {
    echo "Yeni şifreler uyuşmuyor.";
}

// Veritabanı bağlantısını kapatma
$conn->close();


?>