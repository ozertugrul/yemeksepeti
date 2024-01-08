<?php
include 'baglan.php';

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Formdan gelen verileri al
$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];
$telNo = $_POST['telNo'];
$dTarih = $_POST['dTarih'];



// Şifreyi hashle
$hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);

// Veritabanında aynı e-posta adresinin kullanılıp kullanılmadığını kontrol et
$check_existing_email = "SELECT * FROM Kullanicilar WHERE Eposta = '$eposta'";
$result = $conn->query($check_existing_email);

if ($result->num_rows > 0) {
    // E-posta adresi zaten kullanımda
    echo "Bu e-posta adresi zaten kullanımda. Lütfen farklı bir e-posta adresi deneyin.";
} else {
    // Eğer e-posta adresi kullanımda değilse, veritabanına ekle
    $sql = "INSERT INTO Kullanicilar (Adi, Soyadi, Eposta, Sifre, TelNo, dogumTarihi) VALUES ('$adi', '$soyadi', '$eposta', '$hashed_sifre', '$telNo', '$dTarih' )";

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla oluşturuldu.";
        header("Location: index.php");// anasayfaya dön
    } else {
        echo "Hata: " . $conn->error;
    }
}

// Bağlantıyı kapat
$conn->close();
?>
