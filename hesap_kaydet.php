<?php

include("baglan.php");

session_start();
if (!isset($_SESSION["KullaniciID"])) {
  echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
  echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2500); // 2 seconds
        </script>';
  exit();
  
}

// echo ($_SESSION["KullaniciID"]);

// echo ($_SESSION["adi"]);

// echo ($_SESSION["soyadi"]);

// Oturumda kullanıcıID var mı kontrol et

// KullanıcıID'yi al
$KullaniciID = $_SESSION["KullaniciID"];

// Formdan gelen verileri al
$cep_telefonu = $_POST["cep_tel"];
$dogum_tarihi = $_POST["dog_tar"];
$adKaydet =  $_POST["kullaniciadi"];
$Soyadi = $_POST["Soyadi"];
// Kullanıcı ID'sini session'dan al
$userId = $_SESSION["KullaniciID"];
$Adres = $_POST["Adres"];

// Veriyi güncelleme sorgusu
$sql = "UPDATE kullanicilar SET Adi = '$adKaydet', Adres = '$Adres', Soyadi = '$Soyadi',   cep_telefonu = '$cep_telefonu', dogum_tarihi = '$dogum_tarihi' WHERE KullaniciID = $userId";

// Güncelleme sorgusunu çalıştırma
if ($conn->query($sql) === TRUE) {
    echo  "Bilgiler başarıyla güncellendi.";
} else {
    echo "Güncelleme hatası: " . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>