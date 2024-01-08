<?php
session_start(); 


if (!isset($_SESSION["KullaniciID"])) {
    echo "Oturum bulunamadı. Giriş yapınız.";
    exit();
}
echo($_SESSION["KullaniciID"]);

?>