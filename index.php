<?php
session_start();
error_reporting(0);
include 'baglan.php';
$_SESSION["KullaniciID"] = $row["KullaniciID"];
$_SESSION["adi"] = $row["Adi"];
$_SESSION["soyadi"] = $row["Soyadi"];

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Sample Headline">
  <meta name="description" content="">
  <title>Giriş</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="index.css" media="screen">
  
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <link rel="stylesheet" href="./assets/plugins/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <!-- SCRIPTS  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./assets/plugins/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>

  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Giriş">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body style="background-color: #333; color: #fff" data-home-page="Giriş.html" data-home-page-title="Giriş" data-path-to-root="./" data-include-products="false"
  class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="tr">
  <header class="u-clearfix u-header u-header" id="sec-405b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="javascript:;"
        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1" 
        data-bs-toggle="modal" 
        data-bs-target="#login"
        style="font-size: 14px;">
        ÜYE OL / GİRİŞ YAP

      </a>
      
      <img class="u-image u-image-contain u-image-default u-image-1" src="images\default-logo.png" alt="index.php"
        data-image-width="150" data-image-height="44">
    </div>
  </header>

    

  <!-- giriş -->
  <div class="login-modal modal fade" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center d-block">
          <h5 style="color:black!important;" class="modal-title">Giriş Yap</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action=" login.php " method="POST">
          <div class="modal-body">
            <div class="floating-form mb-3">
              <input type="text" class="form-control" id="email" name="eposta" autocomplete="off" required />
              <label for="username">E-posta</label>
            </div>
            <div class="floating-form">
              <input type="password" class="form-control" id="r-password" name="sifre" autocomplete="off" required />
              <label for="name">Şifre</label>
            </div>
            <div class="text-end">
              <a href="#" class="text-end" style="font-size: 12px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#sifreyeni">Şifremi Unuttum.</a>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-sm btn-orange w-100" value="Giriş yap">

        </form>
        <div  class="mt-3" style="color:black!important; font-size: 12px;">
          Hesabın yok mu?
          <a href="javascript:;" style="font-size: 12px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register"><b>Hesap
              oluştur</b></a>
        </div>
      </div>
    </div>
  </div>
  </div>

 <!-- Şifremi unuttum -->
  

 <div class="login-modal modal fade" id="sifreyeni" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center d-block">
          <h5 style="color:black!important;" class="modal-title">Şifre Yenile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action=" sifreyenile.php " method="POST">
          <div class="modal-body">

          <div class="floating-form mb-3">
        <input type="email" class="form-control" id="eposta" name="eposta" autocomplete="off" required />
        <label for="eposta">E-posta</label>
    </div>

          <div class="floating-form mb-3">
        <input type="text" class="form-control" id="adi" name="adi" autocomplete="off" required />
        <label for="adi">İsim</label>
    </div>
    
    <div class="floating-form mb-3">
    <input type="password" class="form-control" id="sifre" name="sifre" autocomplete="off" required />
        <label for="sifre">Şifre</label>
    </div>
    
    <div class="floating-form">
        <input type="password" class="form-control" id="sifre" name="sifre_tekrari" autocomplete="off" required />
        <label for="sifre">Şifre Tekrarı</label>
    </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-sm btn-orange w-100" value="Şifre Yenile">

        </form>
        <div  class="mt-3" style="color:black!important; font-size: 12px;">
          Şifreni hatırladın mı?
          <a href="javascript:;" style="font-size: 12px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login"><b>Giriş Yap</b></a>
        </div>
      </div>
    </div>
  </div>
  </div>







  <!-- Register -->
  <div class="login-modal modal fade" id="register" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center d-block">
          <h5 style="color:black!important;" class="modal-title">Üye Ol</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="register.php" method="POST">
    <div class="floating-form mb-3">
        <input type="text" class="form-control" id="adi" name="adi" autocomplete="off" required />
        <label for="adi">İsim</label>
    </div>
    <div class="floating-form mb-3">
        <input type="text" class="form-control" id="soyadi" name="soyadi" autocomplete="off" required />
        <label for="soyadi">Soyisim</label>
    </div>
    <div class="floating-form mb-3">
        <input type="email" class="form-control" id="eposta" name="eposta" autocomplete="off" required />
        <label for="eposta">E-posta</label>
    </div>
    <div class="floating-form">
        <input type="password" class="form-control" id="sifre" name="sifre" autocomplete="off" required />
        <label for="sifre">Şifre</label>
    </div>
    <div class="modal-footer">
        <input class="btn btn-sm btn-orange w-100" type="submit" value="Üye Ol">
    </div>
</form>
          <div class="mt-3" style="color:black!important; font-size: 12px; margin-bottom: 1rem!important; display: flex; justify-content: center; "> Zaten bir Hesabım var.&nbsp;
            <a href="javascript:;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login" style="font-size: 12px;">
              <b>Giriş Yap</b>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="u-clearfix u-custom-color-2 u-valign-top-lg u-section-1" id="sec-bc60">
    <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
          <h3 class="u-text u-text-1 u-align-center " 
          style=" display: flex; justify-content:center; align-items: center;"> Yemek ya da market, tüm ihtiyaçların kapında!</h3>

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
    <img
      class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1"
      src="images/home-vendor-tr.webp" alt="" data-image-width="1200" data-image-height="768">
    <div class="u-container-style u-gradient u-group u-radius u-shape-round u-group-1">
      <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
        <p class="u-text u-text-default u-text-2">
          <span style="font-size: 1.5rem;"> Hemen katılın, Yemeksepeti ile satışlarınızı katlamaya başlayın </span>
          <br>
          <br>Binlerce yeni kullanıcıya ulaşabilmek ister misiniz? Sadece kendi semtinizdekiler değil, artık çevre
          semtlerdeki binlerce kullanıcı da işletmenizden sipariş verebilecek. Bir ev, bir plaza, bir işyeri ya da
          üniversite kampüsü, hizmet vermek istediğiniz kim varsa artık müşteriniz.&nbsp;<br>
          <br>Gayet basit! Menünüzü listeliyoruz ve sipariş bilgilerini size ulaştırıyoruz. Sipariş teslimatını
          dilerseniz kendiniz yapabiliyorsunuz, dilerseniz Yemeksepeti sizin adınıza kullanıcıya ulaştırıyor.&nbsp;<br>
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
                    <div
                      class="u-container-style u-expanded-width-lg u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-1"
                      data-image-width="525" data-image-height="360">
                      <div class="u-container-layout u-container-layout-2">
                        <a href="#"
                          class="u-align-left u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">İZMİR</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-3">
                    <div
                      class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-2"
                      data-image-width="1600" data-image-height="900">
                      <div class="u-container-layout u-container-layout-4">
                        <a href="#" class="u-align-center u-border-none u-btn u-button-style u-btn-2">ANKARA</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-5">
                    <div
                      class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-3"
                      data-image-width="612" data-image-height="398">
                      <div class="u-container-layout u-container-layout-6">
                        <a href="#"
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
                    <div
                      class="custom-expanded u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-group u-image u-radius u-shape-round u-image-4"
                      data-image-width="612" data-image-height="407">
                      <div class="u-container-layout u-container-layout-9">
                        <a href="//restoran.php?sehir=Antalya"
                          class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-4">ANTALYA</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="u-container-align-center-lg u-container-align-center-xl u-container-style u-layout-cell u-size-15 u-layout-cell-6">
                  <div class="u-container-layout u-container-layout-10">
                    <div
                      class="u-container-style u-expanded-width-lg u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-image u-radius u-shape-round u-image-5"
                      data-image-width="1000" data-image-height="588">
                      <div class="u-container-layout u-container-layout-11">
                        <a href="/restoran.php?sehir=Amasya"
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
      <div class="custom-expanded u-container-style u-group u-image u-radius u-shape-round u-image-6"
        data-image-width="600" data-image-height="400">
        <div class="u-container-layout u-container-layout-14">
          <a href="#"
            class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-6">BURSA</a>
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
          <img class="custom-expanded u-image u-image-default u-image-1" src="images/homepage-yemeksepeti-apps-2.webp"
            alt="" data-image-width="1200" data-image-height="1056">
          <p class="u-text u-text-2">
            <span style="font-size: 1.5rem;"> Yemek ve market ihtiyaçlarının tamamı için hemen indir ve uygulamaya özel
              fırsatları yakala!</span>
            <br>
            <br>
            <br>Yemeksepeti uygulamasıyla kampanyalardan haberdar olun, siparişinizin durumunu bildirimlerle takip edin
            ve haritadan canlı olarak teslimatınızı izleyin. İhtiyacınız olan her şey parmaklarınızın ucunda!
          </p>
        </div>
      </div>
      <p class="u-text u-text-3">Türkiye'nin 81 şehri ve KKTC'de, 50 bini aşkın restoran iş ortağımızla, Türkiye’de
        online yemek siparişi denince ilk akla gelen markayız! Restoran zincirleri başta olmak üzere, civarınızdaki en
        sevdiğiniz restoranlardan kolayca sipariş verebilirsiniz.&nbsp;<br>
        <br>Bunun yanında, hızlı market alışverişine ihtiyacınız varsa, Yemeksepeti Market hizmetinizde!&nbsp;Binlerce
        market ürünü dile<span style="font-weight: 400;"></span>diğiniz anda, dakikalar içinde gelsin!<span
          style="font-weight: 400;"></span>
        <br>
        <br>Restoranınızı seçin, istediğiniz yemekleri sepete ekleyin, online ya da kapıda dilediğiniz gibi ödeyin.
        Gerisi kolay, siparişiniz hızlıca kapınızda!&nbsp;<br>
        <br>Yemeksepeti Mahalle de burada! Çevrenizdeki bildiğiniz, güvendiğiniz işletme ve esnaflar; marketten kasaba,
        şarküteriden manava, balıkçıdan petshopa, tüm kampanyaları ve fırsatlarıyla siparişiniz için hazır.&nbsp;<br>
        <br>
        <span style="font-weight: 700; font-size: 1.25rem;">Yemeksepeti’nde sizi neler bekliyor?&nbsp; </span>
        <br>
        <br>
        <span class="u-text-custom-color-1">✓</span> Yemek siparişi ya da market alışverişinde onlarca mutfak ve
        kategori, binlerce çeşit ürün!&nbsp;<br>
        <span class="u-text-custom-color-1">✓ </span>Yemek ve market ihtiyaçlarınızda her gün on binlerce
        indirim!&nbsp;<br>
        <span class="u-text-custom-color-1">✓ </span>Online ya da kapıda, dilediğiniz gibi ödeme seçeneği!&nbsp;<br>
        <span class="u-text-custom-color-1">✓ </span>Siparişinizle ilgili size her zaman destek olmaya hazır, 7/24 Canlı
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



 <?php include("footer.php")?>
</body>
</html>

