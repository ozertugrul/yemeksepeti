<?php
// logout.php dosyası

// Oturumu başlat
session_start();

// Oturumu sonlandır
session_destroy();
header("Location: index.php");
?>