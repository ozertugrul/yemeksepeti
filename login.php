<?php
// Veritabanı bağlantısı
include 'baglan.php';
session_start();

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


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
            echo '<script>alert("Geçersiz Şifre");</script>';
            echo '<script>
              setTimeout(function() {
                  window.location.href = "index.php";
              }, 500); // 2 seconds
          </script>';
        }
    } else {
        $hata_mesaji = "Geçersiz e-posta";
        echo '<script>alert("Geçersiz e-posta");</script>';
        echo '<script>
              setTimeout(function() {
                  window.location.href = "index.php";
              }, 500; // 2 seconds
          </script>';
    }
}

if (!isset($_SESSION["KullaniciID"])) {
    echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
    echo '<script>
              setTimeout(function() {
                  window.location.href = "index.php";
              }, 2500); // 2 seconds
          </script>';
    exit();

  }


// Veritabanı bağlantısını kapat
$conn->close();
?>