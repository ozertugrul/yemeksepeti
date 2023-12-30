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

<body data-home-page="Giriş.html" data-home-page-title="Giriş" data-path-to-root="./" data-include-products="false"
  class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="tr">
  <header class="u-clearfix u-header u-header" id="sec-405b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="javascript:;"
        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1" 
        data-bs-toggle="modal" 
        data-bs-target="#login"
        style="font-size: 15px;">
        LOG IN / SIGN UP

      </a>
      <img class="u-image u-image-contain u-image-default u-image-1" src="images/yemeksepetiV2.0-2.png" alt=""
        data-image-width="150" data-image-height="44">
    </div>
  </header>

    

  <!-- giriş -->
  <div class="login-modal modal fade" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center d-block">
          <h5 class="modal-title">Giriş Yap</h5>
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
              <a href="#" class="text-end" style="font-size: 12px;">Şifremi Unuttum.</a>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-sm btn-orange w-100" value="Giriş yap">

        </form>
        <div class="mt-3" style="font-size: 12px;">
          Hesabın yok mu?
          <a href="javascript:;" style="font-size: 12px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register"><b>Hesap
              oluştur</b></a>
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
          <h5 class="modal-title">Üye Ol</h5>
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
          <div class="mt-3" style="font-size: 12px; margin-bottom: 1rem!important; display: flex; justify-content: center; "> Zaten bir Hesabım var.&nbsp;
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
            <div
              class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
              <h3 class="u-text u-text-1"> Yemek ya da market, tüm ihtiyaçların kapında!</h3>
              <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                <div class="u-container-layout u-container-layout-2">
                  <a href="#"
                    class="u-align-right u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-btn-1">KEŞFET</a>
                  <a href="#" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">konum
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
        class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-black u-text-default u-text-1">
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
                        <a href="#"
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
                        <a href="#"
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
      <p class="u-text u-text-black u-text-1">Mobil uygulamam​ızı indirin</p>
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



  <footer class="u-clearfix u-footer u-grey-80" id="sec-0466">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div
              class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-30-md u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1"><!--position-->
                <div data-position="" class="u-position"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-block-header u-text"><!--block_header_content-->Powered by
                        MARCO<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--> Yemeksepeti
                        klonu&nbsp;<!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div
              class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <img class="u-image u-image-contain u-image-default u-image-1" src="images/yemeksepetiV2.0.png" alt=""
                  data-image-width="135" data-image-height="40">
              </div>
            </div>
            <div
              class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-3">
              <div class="u-container-layout u-valign-middle u-container-layout-3">
                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                  <a class="u-social-url" title="facebook" target="_blank" href="#"><span
                      class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e8c"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1e8c">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                      </svg></span>
                  </a>
                  <a class="u-social-url" title="twitter" target="_blank" href="#"><span
                      class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a683"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a683">
                        <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                      </svg></span>
                  </a>
                  <a class="u-social-url" title="instagram" target="_blank" href="#
                    "><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3fd5"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3fd5">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF"
                          d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                        <path fill="#FFFFFF"
                          d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                        </path>
                        <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                      </svg></span>
                  </a>
                  <a class="u-social-url" title="linkedin.com" target="_blank" href="#"><span
                      class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c34c"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c34c">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                      </svg></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>

