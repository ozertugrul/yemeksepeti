<?php
 
include('../baglan.php');

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Formdan gelen kullanıcı adı ve şifre
$user = $_POST['username'];
$pass = $_POST['password'];

// SQL sorgusu oluştur
$sql = "SELECT * FROM yetkili WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

// Kullanıcı doğrulaması
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $user;
    // Kullanıcı doğrulandı, yönlendir
    header("Location: admin.php");

} else {
    // Kullanıcı doğrulanamadı, hata mesajı veya başka bir işlem
    echo "Kullanıcı adı veya şifre hatalı.";
}

// Veritabanı bağlantısını kapat
$conn->close();


?>