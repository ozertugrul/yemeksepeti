<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Kişisel Bilgiler, Kart Bilgileri">
    <meta name="description" content="">
    <title>Giriş</title>
    <link rel="stylesheet" href="checkout1/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="checkout1/css/Giriş.css" media="screen">
    <script class="u-script" type="text/javascript" src="checkout1/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="checkout1/js/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <link rel="stylesheet" href="nc.css" media="screen">

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>

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
        $adres = $row["Adres"];
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
    <section class="u-clearfix u-section-1" id="sec-e7a8">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="custom-expanded u-border-1 u-border-grey-75 u-container-style u-group u-radius u-shape-round u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <img class="u-image u-image-default u-image-1" src="checkout1/images/resim.png" alt=""
                        data-image-width="596" data-image-height="158">
                    <h5 class="u-text u-text-default u-text-1">
                        <?php echo $adres; ?><br>
                        </h3>
                        <div
                            class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-30 u-line-1">
                        </div>
                        <div class="custom-expanded u-form u-form-1">
                            <form action="hesap_kaydet.php"
                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email"
                                name="form" style="padding: 10px;">
                                <div class="u-form-group u-form-group-4">
                                    <label for="text-cd7d" class="u-label">Adres</label>
                                    <input type="text" placeholder="Adresinizi Girin" id="text-cd7d" name="Adres"
                                        class="u-input u-input-rectangle" style="height: 80px; font-size: 24px;" value="<?php echo $adres; ?>">
                                </div>
                                <div class="u-align-left u-form-group u-form-submit">
                                    <a href="#"
                                        class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-1">Kaydet ve
                                        Devam Et</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Mesajınız
                                    gönderildi.
                                </div>
                                <div class="u-form-send-error u-form-send-message"> Mesajınız gönderilemedi. Lütfen
                                    hataları
                                    düzeltin ve tekrar deneyin. </div>
                                <input type="hidden" value="" name="recaptchaResponse">
                                <input type="hidden" name="formServices" value="3dcd58ca-cc55-d47a-4147-06ade69da26d">
                            </form>
                        </div>
                </div>
            </div>
            <div
                class="u-border-1 u-border-grey-75 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-2">
                <div class="u-container-layout u-container-layout-2">
                    <h3 class="u-text u-text-default u-text-2">Siparişiniz</h3>
                    <h6 class="u-text u-text-default u-text-3">ürünler yaz</h6>
                    <h6 class="u-text u-text-default u-text-4">66.50 TL</h6>
                    <h6 class="u-text u-text-default u-text-5">Ara Toplam</h6>
                    <h6 class="u-text u-text-default u-text-6">Gönderim Ücreti</h6>
                    <h6 class="u-text u-text-default u-text-7">ücretsiz</h6>
                    <h4 class="u-text u-text-default u-text-8">Siparişiniz</h4>
                    <h4 class="u-text u-text-default u-text-9">66.50 TL</h4>
                    <h6 class="u-text u-text-default u-text-10">(KDV Dahil)</h6>
                </div>
            </div>
            <div
                class="u-border-1 u-border-grey-75 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-3">
                <div class="u-container-layout u-container-layout-3">
                    <h2 class="u-text u-text-default u-text-11">Kişisel Bilgiler</h2>
                    <div class="u-form u-form-2">
                        <form action="hesap_kaydet.php" method="POST"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email"
                            name="form-1" style="padding: 10px;">
                            <div class="u-form-email u-form-group">
                                <label for="email-d17b" class="u-label">Email</label>
                                <input type="email" placeholder="Geçerli bir e-posta adresi girin" id="email-d17b"
                                    name="email" class="u-input u-input-rectangle" required=""
                                    value="<?php echo $email; ?> " disabled>
                            </div>
                            <div class="u-form-group u-form-name">
                                <label for="name-d17b" class="u-label">Adı</label>
                                <input type="text" placeholder="Adınızı girin" id="name-d17b" name="kullaniciadi"
                                    class="u-input u-input-rectangle" required="" value="<?php echo $kullaniciAdi; ?>">
                            </div>
                            <div class="u-form-group u-form-group-5">
                                <label for="text-8af3" class="u-label">Soyadı</label>
                                <input type="text" placeholder="" id="text-8af3" name="Soyadi"
                                    class="u-input u-input-rectangle" required="" value="<?php echo $soyadi; ?>">
                            </div>
                            <div class="u-form-group u-form-group-6">
                                <label for="text-d57b" class="u-label">Cep Telefonu</label>
                                <input type="text" placeholder="" id="text-d57b" name="cep_tel"
                                    class="u-input u-input-rectangle" value="<?php echo $cep_telefonu; ?>">
                            </div>
                            <div class="u-form-group u-form-submit">
                                <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-2">
                                    Kaydet ve Devam Et</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Mesajınız gönderildi.
                            </div>
                            <div class="u-form-send-error u-form-send-message"> Mesajınız gönderilemedi. Lütfen hataları
                                düzeltin ve tekrar deneyin. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" name="formServices" value="3dcd58ca-cc55-d47a-4147-06ade69da26d">
                        </form>
                    </div>
                </div>
            </div>
            <div
                class="u-border-1 u-border-grey-75 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-4">
                <div class="u-container-layout u-container-layout-4">
                    <h2 class="u-text u-text-default u-text-12">Kart Bilgileri</h2>
                    <div class="u-form u-form-3">
                        <form action="#" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                            source="email" name="form-1" style="padding: 10px;">
                            <div class="u-form-email u-form-group">
                                <label for="email-d17b" class="u-label">Kart üzerindeki isim</label>
                                <input type="email" placeholder="Kart üzerindeki isim" id="email-d17b" name="email"
                                    class="u-input u-input-rectangle" required="">
                            </div>
                            <div class="u-form-group">
                                <label for="name-d17b" class="u-label">kart numarası</label>
                                <input type="text" placeholder="kart numarası girin" id="name-d17b" name="name"
                                    class="u-input u-input-rectangle" required="required">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-10">
                                <label for="text-376a" class="u-label">Ay</label>
                                <input type="text" placeholder="" id="text-376a" name="text-3"
                                    class="u-input u-input-rectangle">
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-11">
                                <label for="text-e7fc" class="u-label">Yıl</label>
                                <input type="text" placeholder="" id="text-e7fc" name="text-2"
                                    class="u-input u-input-rectangle">
                            </div>
                            <div class="u-form-group u-form-group-12">
                                <label for="text-a9a4" class="u-label">CVV</label>
                                <input type="text" placeholder="" id="text-a9a4" name="text"
                                    class="u-input u-input-rectangle">
                            </div>
                            <div class="u-form-group u-form-submit">
                                <a href="#"
                                    class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-3">Kaydet</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Mesajınız gönderildi.
                            </div>
                            <div class="u-form-send-error u-form-send-message"> Mesajınız gönderilemedi. Lütfen hataları
                                düzeltin ve tekrar deneyin. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" name="formServices" value="3dcd58ca-cc55-d47a-4147-06ade69da26d">
                        </form>
                    </div>
                </div>
            </div>
            <a href="https://nicepage.com/c/slider-website-templates"
                class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4">Siparişi
                Tamamla</a>
            <p class="u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-13">Bu siparişi tamamlayarak,
                Kullanım Koşulları'nı kabul etmektesiniz.&nbsp;<br>Bu siparişi vermenin Kullanım Koşulları uyarınca
                ödeme yapmamı gerektirdiğini kabul etmekteyim.
            </p>
        </div>
    </section>



    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1850">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Örnek metin. Metin Öğesini seçmek için tıklayın.</p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
            <span>HTML Website Templates</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="" target="_blank">
            <span>Offline Website Builder</span>
        </a>.
    </section>

</body>

</html>