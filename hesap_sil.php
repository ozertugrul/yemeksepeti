<?php
include("baglan.php");

session_start();

if (!isset($_SESSION["KullaniciID"])) {
    echo "Lütfen oturum açınız. Anasayfaya yönlendiriliyorsunuz!";
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2500); // 2.5 seconds
        </script>';
    exit();
}

// KullanıcıID'yi al
$userId = $_SESSION["KullaniciID"];

// Veriyi silme sorgusu
$sql = "DELETE FROM kullanicilar WHERE KullaniciID = $userId";

// Silme sorgusunu çalıştırma
if ($conn->query($sql) === TRUE) {
    echo "Hesap başarıyla silindi. Anasayfaya yönlendiriliyorsunuz.";
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2500); // 2.5 seconds
        </script>';
} else {
    echo "Silme hatası: " . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>