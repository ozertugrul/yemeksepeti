<?php
include("baglan.php");
// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen değerleri al
$eposta = $_POST['eposta'];
$adi = $_POST['adi'];
$sifre = $_POST['sifre'];
$sifre_tekrari = $_POST['sifre_tekrari'];

// Veritabanındaki kullanıcıları sorgula
$sql = "SELECT * FROM kullanicilar WHERE Adi = '$adi' AND Eposta = '$eposta'";
$result = $conn->query($sql);

// Kullanıcı var mı kontrol et
if ($result->num_rows > 0) {
    // Şifreleri kontrol et
    if ($sifre == $sifre_tekrari) {
        // Şifreyi güncelle
        $hashed_password = password_hash($sifre, PASSWORD_DEFAULT); // Şifreyi güvenli bir şekilde hashle
        $update_sql = "UPDATE kullanicilar SET Sifre = '$hashed_password' WHERE Adi = '$adi' AND Eposta = '$eposta'";

        if ($conn->query($update_sql) === TRUE) {
            
            echo "Lütfen Bekleyiniz";
            echo '<script>alert("Şifre başarıyla güncellendi.");</script>';
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 100); // 2 seconds
                </script>';

        } else {
            echo "Hata oluştu: " . $conn->error;
           
    echo '<script>alert("Sunucu Hatası");</script>';
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 100); // 2 seconds
        </script>';
        }
    } else {
        
        echo "Lütfen Bekleyiniz";
    echo '<script>alert("Şifreler eşleşmiyor.");</script>';
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 100); // 2 seconds
        </script>';
    }
} else {
    echo "Lütfen Bekleyiniz";
    echo '<script>alert("Kullanıcı bulunamadı.");</script>';
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 100); // 2 seconds
        </script>';
}

// Veritabanı bağlantısını kapat
$conn->close();
