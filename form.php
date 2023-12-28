<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Kayıt</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="mainForm">
        <form action="register.php" method="post">
            <h2>KAYDOL</h2>
            <label for="adi">Adı:</label>
            <input type="text" id="adi" name="adi" required><br>

            <label for="soyadi">Soyadı:</label>
            <input type="text" id="soyadi" name="soyadi" required><br>

            <label for="eposta">E-Posta:</label>
            <input type="email" id="eposta" name="eposta" required><br>

            <label for="sifre">Şifre:</label>
            <input type="password" id="sifre" name="sifre" required><br>

            <input type="submit" value="Kayıt Ol">
        </form>



        <form action="login.php" method="post">
            <h2>GİRİŞ YAP</h2>

            <label for="eposta">E-Posta:</label>
            <input type="email" id="eposta" name="eposta" required><br>

            <label for="sifre">Şifre:</label>
            <input type="password" id="sifre" name="sifre" required><br>

            <input type="submit" value="Giriş yap">
        </form>
    </div>
    <div>
    <a href="index.php"> <button> ANASAYFA</button></a>
    <a href="">Üye değil misin? <button>Üye ol</button></a>
    </div>
</body>

</html>
