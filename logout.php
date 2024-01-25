<?php

session_start();


echo '<script>localStorage.removeItem("cart");</script>';


session_unset(); // Oturum değişkenlerini temizle
session_destroy();
echo '<script>alert("Çıkış Yapıldı!");</script>';
echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 100); // 2 seconds
        </script>';
?>

