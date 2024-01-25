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


// Veriyi güncelleme sorgusu
$sql = "UPDATE kullanicilar SET cep_telefonu = '$cep_telefonu' WHERE KullaniciID = $KullaniciID";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Bilgiler başarıyla güncellendi.");</script>';
} else {
    echo '<script>alert("Güncelleme hatası: ' . $conn->error . '");</script>';
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>