<?php
// logout.php dosyası

// Oturumu başlat
session_start();

// Oturumu sonlandır
session_destroy();

// Kullanıcıyı başka bir sayfaya yönlendir (örneğin, giriş sayfasına)
header("Location: index.php");
?>