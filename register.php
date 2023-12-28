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

// Şifreyi hashle
$hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);

// Veritabanına ekle
$sql = "INSERT INTO Kullanicilar (Adi, Soyadi, Eposta, Sifre) VALUES ('$adi', '$soyadi', '$eposta', '$hashed_sifre')";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla oluşturuldu.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Bağlantıyı kapat
$conn->close();


?>
