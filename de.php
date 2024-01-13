<?php
session_start(); 


if (!isset($_SESSION["KullaniciID"])) {
    echo "Oturum bulunamadı. Giriş yapınız.";
    exit();
}
echo($_SESSION["KullaniciID"]);
// password_verify("Sifre");
echo($_SESSION["Sifre"]);

?>