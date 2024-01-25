<?php
session_start();

include("baglan.php");
//echo ($_SESSION["KullaniciID"]);

//echo ($_SESSION["adi"]);

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



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="index.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>mainpage</title>
    <link rel="stylesheet" href="nc.css" media="screen">
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
</head>

<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
    <?php
    include("navbar.php");
    ?>


    <section class="u-clearfix u-custom-color-2 u-valign-top-lg u-section-1" id="sec-bc60">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                        <div
                            class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                            <h3 class="u-text u-text-1 u-align-center"> Yemek ya da market, tüm ihtiyaçların kapında!
                            </h3>
                            <div
                                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <a href="sehirsec.php"
                                        class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2"
                                        style=" margin-top: 100px;">konum
                                        seç<br>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-1"
                        data-image-width="2449" data-image-height="1632">
                        <div class="u-container-layout u-container-layout-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-1149">
        <h2 class="u-align-left u-text u-text-default-lg u-text-default-xl u-text-1"> Restoran veya Mahalle esnafı iş
            ortağımız olun</h2>
        <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1"
            src="images/home-vendor-tr.webp" alt="" data-image-width="1200" data-image-height="768">
        <div class="u-container-style u-gradient u-group u-radius u-shape-round u-group-1">
            <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                <p class="u-text u-text-default u-text-2">
                    <span style="font-size: 1.5rem;"> Hemen katılın, Yemeksepeti ile satışlarınızı katlamaya başlayın
                    </span>
                    <br>
                    <br>Binlerce yeni kullanıcıya ulaşabilmek ister misiniz? Sadece kendi semtinizdekiler değil, artık
                    çevre
                    semtlerdeki binlerce kullanıcı da işletmenizden sipariş verebilecek. Bir ev, bir plaza, bir işyeri
                    ya da
                    üniversite kampüsü, hizmet vermek istediğiniz kim varsa artık müşteriniz.&nbsp;<br>
                    <br>Gayet basit! Menünüzü listeliyoruz ve sipariş bilgilerini size ulaştırıyoruz. Sipariş
                    teslimatını
                    dilerseniz kendiniz yapabiliyorsunuz, dilerseniz Yemeksepeti sizin adınıza kullanıcıya
                    ulaştırıyor.&nbsp;<br>
                    <br>Hemen ailemize katılabilir ve muhteşem avantajlara sahip iş ortaklarımızdan biri olabilirsiniz.
                </p>
                <a href="#"
                    class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius u-btn-1">BAŞLAYALIM<br>
                </a>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-8479">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p
                class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-white u-text-default u-text-1">
                Türkiye'nin her şehrindeyiz!</p>
            <div
                class="data-layout-selected u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-1">
                                    <div class="u-container-layout u-valign-top-xs u-container-layout-1">
                                        <div class="u-container-style u-expanded-width-lg u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-1"
                                            data-image-width="525" data-image-height="360">
                                            <div class="u-container-layout u-container-layout-2">
                                                <a href="restoran.php?sehir=İzmir"
                                                    class="u-align-left u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">İZMİR</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-3">
                                        <div class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-2"
                                            data-image-width="1600" data-image-height="900">
                                            <div class="u-container-layout u-container-layout-4">
                                                <a href="restoran.php?sehir=Ankara"
                                                    class="u-align-center u-border-none u-btn u-button-style u-btn-2 u-hover-palette-1-dark-1 u-palette-1-base">ANKARA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-3">
                                    <div class="u-container-layout u-container-layout-5">
                                        <div class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-3"
                                            data-image-width="612" data-image-height="398">
                                            <div class="u-container-layout u-container-layout-6">
                                                <a href="restoran.php?sehir=İstanbul"
                                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">İSTANBUL</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-4">
                                    <div class="u-container-layout u-valign-middle u-container-layout-7"></div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-5">
                                    <div class="u-container-layout u-container-layout-8">
                                        <div class="custom-expanded u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-group u-image u-radius u-shape-round u-image-4"
                                            data-image-width="612" data-image-height="407">
                                            <div class="u-container-layout u-container-layout-9">
                                                <a href="restoran.php?sehir=Antalya"
                                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-4">ANTALYA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-6">
                                    <div class="u-container-layout u-container-layout-10">
                                        <div class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-5"
                                            data-image-width="1000" data-image-height="588">
                                            <div class="u-container-layout u-container-layout-11">
                                                <a href="restoran.php?sehir=Amasya"
                                                    class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-5">AMASYA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-7">
                                    <div class="u-container-layout u-container-layout-12"></div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-8">
                                    <div class="u-container-layout u-container-layout-13"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-e612">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-white u-text-1">Mobil uygulamam​ızı indirin</p>
            <div
                class="custom-expanded u-container-style u-custom-color-3 u-expanded-width-lg u-expanded-width-md u-group u-radius u-shape-round u-group-1">
                <div class="u-container-layout u-valign-top-xs u-container-layout-1">
                    <img class="custom-expanded u-image u-image-default u-image-1"
                        src="images/homepage-yemeksepeti-apps-2.webp" alt="" data-image-width="1200"
                        data-image-height="1056">
                    <p class="u-text u-text-2">
                        <span style="font-size: 1.5rem;"> Yemek ve market ihtiyaçlarının tamamı için hemen indir ve
                            uygulamaya özel
                            fırsatları yakala!</span>
                        <br>
                        <br>
                        <br>Yemeksepeti uygulamasıyla kampanyalardan haberdar olun, siparişinizin durumunu bildirimlerle
                        takip edin
                        ve haritadan canlı olarak teslimatınızı izleyin. İhtiyacınız olan her şey parmaklarınızın
                        ucunda!
                    </p>
                </div>
            </div>
            <p class="u-text u-text-3">Türkiye'nin 81 şehri ve KKTC'de, 50 bini aşkın restoran iş ortağımızla,
                Türkiye’de
                online yemek siparişi denince ilk akla gelen markayız! Restoran zincirleri başta olmak üzere,
                civarınızdaki en
                sevdiğiniz restoranlardan kolayca sipariş verebilirsiniz.&nbsp;<br>
                <br>Bunun yanında, hızlı market alışverişine ihtiyacınız varsa, Yemeksepeti Market
                hizmetinizde!&nbsp;Binlerce
                market ürünü dile<span style="font-weight: 400;"></span>diğiniz anda, dakikalar içinde gelsin!<span
                    style="font-weight: 400;"></span>
                <br>
                <br>Restoranınızı seçin, istediğiniz yemekleri sepete ekleyin, online ya da kapıda dilediğiniz gibi
                ödeyin.
                Gerisi kolay, siparişiniz hızlıca kapınızda!&nbsp;<br>
                <br>Yemeksepeti Mahalle de burada! Çevrenizdeki bildiğiniz, güvendiğiniz işletme ve esnaflar; marketten
                kasaba,
                şarküteriden manava, balıkçıdan petshopa, tüm kampanyaları ve fırsatlarıyla siparişiniz için
                hazır.&nbsp;<br>
                <br>
                <span style="font-weight: 700; font-size: 1.25rem;">Yemeksepeti’nde sizi neler bekliyor?&nbsp; </span>
                <br>
                <br>
                <span class="u-text-custom-color-1">✓</span> Yemek siparişi ya da market alışverişinde onlarca mutfak ve
                kategori, binlerce çeşit ürün!&nbsp;<br>
                <span class="u-text-custom-color-1">✓ </span>Yemek ve market ihtiyaçlarınızda her gün on binlerce
                indirim!&nbsp;<br>
                <span class="u-text-custom-color-1">✓ </span>Online ya da kapıda, dilediğiniz gibi ödeme
                seçeneği!&nbsp;<br>
                <span class="u-text-custom-color-1">✓ </span>Siparişinizle ilgili size her zaman destek olmaya hazır,
                7/24 Canlı
                Yardım ekibi!&nbsp;<br>
                <br>Tek yapmanız gereken ihtiyacınızı düşünmek ve çevrenizdeki seçeneklere göz atmak!<br>
                <br>
                <span style="font-weight: 600;">Yemeksepeti yanında, aklındaysa kapında!</span>
            </p>
        </div>
    </section>
    <style class="u-overlap-style">
        .u-overlap:not(.u-sticky-scroll) .u-header {
            background-color: #1a1a1a !important
        }
    </style>



<?php include("footer.php") ?>

</body>

</html>