<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Yemeksepeti">
    <meta name="description" content="">
    <title>Hesabım</title>
    <link rel="stylesheet" href="Hesabım/css/nicepage-hesap.css" media="screen">
    <link rel="stylesheet" href="Hesabım/css/Giriş.css" media="screen">
    <script class="u-script" type="text/javascript" src="Hesabım/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="Hesabım/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <link rel="stylesheet" href="nc.css" media="screen">

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false"
    class="u-body u-xl-mode" data-lang="tr">

    <?php

    // Veritabanı bağlantısını burada tanımlayın
    include 'baglan.php';
    // Bağlantı kontrolü
    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }


    session_start();

    // echo ($_SESSION["KullaniciID"]);
    
    // echo ($_SESSION["adi"]);
    
    // echo ($_SESSION["soyadi"]);
    
    // Oturumda kullanıcıID var mı kontrol et
    if (!isset($_SESSION["KullaniciID"])) {
        echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
        echo '<script>
                  setTimeout(function() {
                      window.location.href = "index.php";
                  }, 2500); // 2 seconds
              </script>';
        exit();

    }

    // KullanıcıID'yi al
    $KullaniciID = $_SESSION["KullaniciID"];

    $sql = "SELECT * FROM Kullanicilar";
    $result = $conn->query($sql);

    // Veriyi ekrana yazdırma
    if ($result->num_rows > 0) {
        // İlk satırı al
        $row = $result->fetch_assoc();

        // Verileri input kutularına yazdırma
        $kullaniciAdi = $row["Adi"];
        $soyadi = $row["Soyadi"];
        // $cep_telefonu = $row["TelNo"];
        $email = $row["Eposta"];
        // $dogum_tarihi = $row["dogumTarihi"];
        $cep_telefonu = isset($row["TelNo"]) ? $row["TelNo"] : '';
        $dogumTarihi = isset($row["dogumTarihi"]) ? $row["dogumTarihi"] : '';

    } else {
        echo "Veri bulunamadı.";
    }

    $userId = $_SESSION["KullaniciID"];

    $sql = "SELECT * FROM kullanicilar WHERE KullaniciID = $userId";
    $result = $conn->query($sql);

    // Veriyi ekrana yazdırma
    if ($result->num_rows > 0) {
        // İlk satırı al
        $row = $result->fetch_assoc();

        // Verileri input kutularına yazdırma
        $kullaniciAdi = $row["Adi"];
        $soyadi = $row["Soyadi"];
        // $cep_telefonu = $row["TelNo"];
        $email = $row["Eposta"];
        // $dogum_tarihi = $row["dogumTarihi"];
        $cep_telefonu = isset($row["cep_telefonu"]) ? $row["cep_telefonu"] : '';
        $dogum_tarihi = isset($row["dogum_tarihi"]) ? $row["dogum_tarihi"] : '';
        $email = $row["Eposta"];
        $sifre = $row["Sifre"];

    } else {
        echo "Veri bulunamadı.";
    }


    ?>


    <?php
    include("navbar.php");
    ?>



    <section class="u-clearfix u-section-1" id="sec-dce9">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-form u-form-1">
                <form action="hesap_kaydet.php" method="POST"
                    class="u-clearfix u-form-spacing-11 u-form-vertical u-inner-form" source="email" name="form"
                    style="padding: 10px;">
                    <div class="u-form-group u-form-name">
                        <label for="name-888f" class="u-label">Adı</label>
                        <input type="text" placeholder="Adınızı girin" id="name-888f" name="name"
                            class="u-input u-input-rectangle" required="" value="<?php echo $kullaniciAdi; ?>">
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-888f" class="u-label">Soyadı</label>
                        <input type="text" placeholder="Geçerli bir e-posta adresi girin" id="email-888f" name="email"
                            class="u-input u-input-rectangle" required="" value="<?php echo $soyadi; ?>">
                    </div>
                    <div class="u-form-group u-form-group-3">
                        <label for="text-de91" class="u-label">Cep Telefonu</label>
                        <input type="number" placeholder="" id="text-de91" name="cep_tel"
                            class="u-input u-input-rectangle" value="<?php echo $cep_telefonu; ?>">
                    </div>
                    <div class="u-form-group u-form-group-4">
                        <label for="text-cd7d" class="u-label">Doğum Tarihi</label>
                        <input type="date" placeholder="" id="text-cd7d" name="dog_tar"
                            class="u-input u-input-rectangle" value="<?php echo $dogum_tarihi; ?>">
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Kaydet</a>
                        <input type="submit" value="Bilgileri Güncelle" class="u-form-control-hidden">
                    </div>
                    <!-- <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Bilgileriniz Güncellendi.
                    </div>
                    <div class="u-form-send-error u-form-send-message"> Bilgileriniz Güncellenemedi. Lütfen hataları
                        düzeltin ve
                        tekrar deneyin. </div> -->
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="9bfb2388-8725-da11-403c-a37036628e2c">
                </form>
            </div>
            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-1"></div>
            <h4 class="u-text u-text-1">E-posta<br>
            </h4>
            <div class="u-form u-form-2">
                <form action="#" class="u-clearfix u-form-spacing-11 u-form-vertical u-inner-form" source="email"
                    name="form" style="padding: 10px;">
                    <div class="u-form-email u-form-group">
                        <label for="email-888f" class="u-form-control-hidden u-label"></label>
                        <input type="email" placeholder="Geçerli bir e-posta adresi girin" id="email-888f" name="email"
                            class="u-input u-input-rectangle" required="" value="<?php echo $email; ?> " disabled>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2">Kaydet</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! E-Posta'nız Güncellendi.
                    </div>
                    <div class="u-form-send-error u-form-send-message"> E-Posta'nız Güncellenemedi. Lütfen hataları
                        düzeltin ve
                        tekrar deneyin. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="9bfb2388-8725-da11-403c-a37036628e2c">
                </form>
            </div>



            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-2"></div>
            <h4 class="u-text u-text-default u-text-2">Şifre<br>
            </h4>
            <div class="u-form u-form-3">
                <form action="hesap_sifre.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                    source="email" name="form-1" style="padding: 10px;">
                    <div class="u-form-group u-form-name">
                        <label for="name-277c" class="u-form-control-hidden u-label"></label>
                        <input type="password" placeholder="Mevcut Şifre" id="name-277c" name="mevcutSifre"
                            class="u-input u-input-rectangle" required="" value="<?php echo $sifre; ?>" disabled>
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-277c" class="u-form-control-hidden u-label"></label>
                        <input type="password" placeholder="Yeni Şifre" id="email-277c" name="yeniSifre"
                            class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-group-10">
                        <label for="text-aba1" class="u-form-control-hidden u-label"></label>
                        <input type="password" placeholder="Yeni Şifre Tekrarı" id="text-aba1" name="yeniSifreTekrar"
                            class="u-input u-input-rectangle">
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2">Kaydet</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Şifreniz Güncellendi. </div>
                    <div class="u-form-send-error u-form-send-message"> Şifreniz Güncellenemedi. Lütfen mevcut şifrenizi
                        doğru
                        giriniz ve
                        tekrar deneyiniz. </div>

                </form>
            </div>
            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-3"></div>
            <h4 class="u-text u-text-default u-text-3">Kartlarım<br>
            </h4>
            <p class="u-text u-text-default u-text-4">Henüz kayıtlı ödeme seçeneğiniz yok.<br>
            </p>
            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-4"></div>
            <h4 class="u-text u-text-5">Hesap Yönetimi<br>
            </h4>
            <p class="u-text u-text-6">Hesabınızı ve onunla ilişkilendirilmiş kişisel verileri silebilirsiniz.<br>
            </p>
            <a href="#"
                class="u-border-2 u-border-hover-grey-75 u-border-palette-2-base u-btn u-button-style u-none u-text-palette-2-base u-btn-4">Hesabımı
                Sil</a> <!--hesap silmek için atama yapmamız lazım -->
            <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-5"></div>
        </div>
    </section>



    <?php

    include("footer.php") ?>

</body>

</html>