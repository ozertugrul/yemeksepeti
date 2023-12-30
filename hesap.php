<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesabım</title>
    <link rel="stylesheet" href="form.css">

</head>

<body>
    <?php
    // Veritabanı bağlantısını burada tanımlayın
    include 'baglan.php';
    // Bağlantı kontrolü
    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }
    // Post edilen verileri al
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adi = $_POST["adi"];
        $soyadi = $_POST["soyadi"];
        $cep_telefonu = $_POST["cep_telefonu"];
        $dogum_tarihi = $_POST["dogum_tarihi"];
        $eposta = $_POST["eposta"];

        // Veritabanına kaydetme
        // ...
    
        // Başarılı mesajı göster
        echo "Hesabınız başarıyla oluşturuldu!";
    }
    ?>

    <h2>Yemek Sepeti Hesabım</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Ad: <input type="text" name="ad" value="<?php echo $adi; ?>">
        <br>
        Soyad: <input type="text" name="soyad" value="<?php echo $soyadi; ?>">
        <br>
        Cep Telefonu: <input type="text" name="cep_telefonu" value="<?php echo $cep_telefonu; ?>">
        <br>
        Doğum Tarihi: <input type="date" name="dogum_tarihi" value="<?php echo $dogum_tarihi; ?>">
        <br>
        <br>
        <input type="submit" name="submit" value="Kaydet">
    </form>
    <form method="post1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        E-Posta: <input type="email" name="e_posta" value="<?php echo $eposta; ?>">
        <br>
        <input type="submit" name="submit" value="Kaydet">
    </form>



</body>

</html>