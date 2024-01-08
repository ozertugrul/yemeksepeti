giriş başarılı

müşteri arayüzü Çalışılacak


<br><br>

<?php
session_start();

echo ($_SESSION["KullaniciID"]);

echo ($_SESSION["adi"]);

echo ($_SESSION["soyadi"]);

// Oturumda kullanıcıID var mı kontrol et
if (!isset($_SESSION["KullaniciID"])) {
    echo "Oturum bulunamadı. Giriş yapınız.";
    exit();
}

// KullanıcıID'yi al
$KullaniciID = $_SESSION["KullaniciID"];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>

        <a href=" re.php
         ">
            ÇIOKIS YAP
        </a>
    </button>
</body>

</html>