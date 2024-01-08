<?php
// Veritabanı bağlantısı
include 'baglan.php';

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// POST verilerini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    // Güvenlik önlemleri
    $eposta = mysqli_real_escape_string($conn, $eposta);

    // Kullanıcıyı sorgula
    $query = "SELECT * FROM Kullanicilar WHERE Eposta='$eposta'";
    $result = $conn->query($query);

    // Kullanıcı bulunduysa
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_sifre = $row["Sifre"];

        // Girilen şifre ile veritabanındaki hash'i kontrol et
        if (password_verify($sifre, $hashed_sifre)) {
            session_start();
            $_SESSION["KullaniciID"] = $row["KullaniciID"];
            $_SESSION["adi"] = $row["Adi"];
            $_SESSION["soyadi"] = $row["Soyadi"];
            header("Location: musteri.php");
            exit();
        } else {
            $hata_mesaji = "Geçersiz şifre";
            header("Location: error.php");
        }
    } else {
        header("Location: error.php");
        $hata_mesaji = "Geçersiz e-posta";
    }
}

// Veritabanı bağlantısını kapat
$conn->close();
?>