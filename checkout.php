<?php

// Veritabanı bağlantısını burada tanımlayın
include 'baglan.php';
session_start();

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
    <title>Ödeme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="checkout1/css/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="Hesabım/js/js.js" defer=""></script>
    <link rel="stylesheet" href="checkout1/css/Giriş.css" media="screen">
    <script class="u-script" type="text/javascript" src="checkout1/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="checkout1/js/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>
    <link rel="stylesheet" href="nc.css" media="screen">




    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false"
    class="u-body u-xl-mode" data-lang="tr">

    <?php
    include("navbar.php");
    ?>

    <?php

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

    $sql = "SELECT * FROM kullanicilar";
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
                            <form action="adres_kaydet.php" method="POST"
                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                            <form action="adres_kaydet.php" method="POST"
                                class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                                name="form" style="padding: 10px;">
                                <div class="u-form-group u-form-group-4">
                                    <label for="text-cd7d" class="u-label">Yukarıdaki adres yanlış ise yeni adresi giriniz.</label>
                                    <input type="text" placeholder="Adresinizi Girin" id="text-cd7d" name="Adres"
                                        class="u-input u-input-rectangle" style="height: 80px; font-size: 24px;"
                                        value="<?php echo $adres; ?>">
                                </div>
                                <div class="u-align-left u-form-group u-form-submit">
                                    <a href="#"
                                        class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-1">Kaydet ve
                                        class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-1">Kaydet ve
                                        Devam Et</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                </div>
                                
                               
                            </form>
                        </div>
                </div>
            </div>
            <div
                class="u-border-1 u-border-grey-75 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-2">
                <div class="u-container-layout u-container-layout-2">
                    <h3 class="u-text u-text-default u-text-2">Siparişiniz</h3>



                    <div class="u-text  u-text-3">

                        <?php
                        // Sepet içeriğini localStorage'dan al
                        $cart = json_decode($_POST['cart'], true);

                        if ($cart) {
                            // Sepet boş değilse içeriği yazdır
                            echo '<ul>';
                            static $totalPrice = 0;
                            foreach ($cart as $item) {
                                echo '<li>' . $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . ' ₺</li>';
                                $totalPrice += $item['quantity'] * $item['price'];

                            }
                            

                            echo '</ul>';   
                            echo '<h6 class="u-text u-text-default u-text-6">Gönderim Ücreti</h6>';
                            echo '<h6 class="u-text u-text-default u-text-7">ücretsiz</h6>';
                            echo '<br> <p><h4 class="u-text u-text-default u-text-8">Siparişiniz</h4></p>';
                            // Second PHP block moved inside the first one
                            echo '<h4 class="u-text u-text-default u-text-9">' . $totalPrice . ' ₺</h4>';
                            echo '<h6 class="u-text u-text-default u-text-10">(KDV Dahil)</h6>';
                        } else {
                            echo '<p>Sepet boş.</p>';
                        }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div
                class="u-border-1 u-border-grey-75 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-3">
                <div class="u-container-layout u-container-layout-3">
                    <h2 class="u-text u-text-default u-text-11">Kişisel Bilgiler</h2>
                    <div class="u-form u-form-2">
                        <form action="tel_kaydet.php" method="POST"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
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
                                    class="u-input u-input-rectangle" required="" value="<?php echo $kullaniciAdi; ?>" disabled>
                            </div>
                            <div class="u-form-group u-form-group-5">
                                <label for="text-8af3" class="u-label">Soyadı</label>
                                <input type="text" placeholder="" id="text-8af3" name="Soyadi"
                                    class="u-input u-input-rectangle" required="" value="<?php echo $soyadi; ?>" disabled>
                            </div>
                            <div class="u-form-group u-form-group-6">
                                <label for="text-d57b" class="u-label">Cep Telefonu</label>
                                <input type="text" placeholder="" id="text-d57b" name="cep_tel"
                                    class="u-input u-input-rectangle" value="<?php echo $cep_telefonu; ?>">
                            </div>
                            <div class="u-form-group u-form-submit">
                                <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-2" >
                                <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-2">
                                    Kaydet ve Devam Et</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            
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
                                <input type="email" placeholder="Ömer Ertuğrul Abdullah" id="email-d17b" name="email"
                                    class="u-input u-input-rectangle" required="" disabled>
                            </div>
                            <div class="u-form-group">
                                <label for="name-d17b" class="u-label">kart numarası</label>
                                <input type="text" placeholder="212002008 , 212002002 , 212002013" id="name-d17b" name="name"
                                    class="u-input u-input-rectangle" required="required" disabled>
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-10">
                                <label for="text-376a" class="u-label">Ay</label>
                                <input type="text" placeholder="Ocak" id="text-376a" name="text-3"
                                    class="u-input u-input-rectangle" disabled>
                            </div>
                            <div class="u-form-group u-form-partition-factor-2 u-form-group-11">
                                <label for="text-e7fc" class="u-label">Yıl</label>
                                <input type="text" placeholder="2024" id="text-e7fc" name="text-2"
                                    class="u-input u-input-rectangle" disabled>
                            </div>
                            <div class="u-form-group u-form-group-12">
                                <label for="text-a9a4" class="u-label">CVV</label>
                                <input type="text" placeholder="000" id="text-a9a4" name="text"
                                    class="u-input u-input-rectangle" disabled>
                            </div>
                            <div class="u-form-group u-form-submit">
                                <a href="#"
                                    class="u-btn u-btn-round u-btn-submit u-button-style u-radius u-btn-3" onclick="kartGuncelle()">Kaydet</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            
                            <input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" name="formServices" value="3dcd58ca-cc55-d47a-4147-06ade69da26d">
                        </form>
                    </div>
                </div>
            </div>

            <form action="checkoutorder.php" method="POST">
                <input type="hidden" name="siparisdetay" value="
                                                                    <?php
                                                                    $cart = json_decode($_POST['cart'], true);

                                                                    if ($cart) {
                                                                        // Sepet boş değilse içeriği yazdır
                                                                        echo '<ul>';
                                                                        $totalPrice = 0;
                                                                        foreach ($cart as $item) {
                                                                            echo '<li>' . $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . ' ₺</li>';
                                                                            $totalPrice += $item['quantity'] * $item['price'];
                                                                        }

                                                                        echo '<br> <p> Toplam Tutar: ' . $totalPrice . ' ₺</p>';
                                                                        echo '</ul>';

                                                                    } else {
                                                                        echo '<p>Sepet boş.</p>';


                                                                    }

                                                                    ?>">

                <input
                    class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-4"
                    type="submit" value="Siparişi Tamamla">
            </form>
            <p class="u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-13">
                Bu siparişi tamamlayarak,
                Kullanım Koşulları'nı kabul etmektesiniz.&nbsp;<br>Bu siparişi vermenin Kullanım Koşulları uyarınca
                ödeme yapmamı gerektirdiğini kabul etmekteyim.
            </p>
        </div>
    </section>

    <?php include("footer.php") ?>

</body>

</html>