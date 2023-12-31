<!-- <!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Yemeksepeti">
  <meta name="description" content="">
  <title>Hesabım</title>
  <link rel="stylesheet" href="Hesabım/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="Hesabım/css/Giriş.css" media="screen">
  <script class="u-script" type="text/javascript" src="Hesabım/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="Hesabım/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->



  <!-- <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name"
		] 
}-->
<!-- </script>
  <meta name="theme-color" content="#478ac9">
  <meta name="twitter:site" content="@">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Giriş">
  <meta name="twitter:description" content="">
  <meta property="og:title" content="Giriş">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head> -->

<body data-home-page="Giriş.html" data-home-page-title="Giriş" data-path-to-root="./" data-include-products="false"
  class="u-body u-xl-mode" data-lang="tr">
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
  <header class="u-clearfix u-header u-header" id="sec-d82a">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="#" class="u-image u-logo u-image-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/yemeksepetiV2.0-2.png" alt=""
          data-image-width="150" data-image-height="44"> </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
          <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                href="#" style="padding: 10px 20px;"><i class="fa-solid fa-user ikon"></i>Hesabım</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                href="#" style="padding: 10px 20px;"><i class="fa-solid fa-globe ikon"></i>Diller</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                href="#" style="padding: 10px 20px;"><i class="fa-solid fa-globe ikon"></i>Favoriler</a>
            </li>
            <li class="u-nav-item"><a
                class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                href="#" style="padding: 10px 20px;"><i class="fa-solid fa-basket-shopping ikon"></i>Alışveriş</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Hesabım</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Favoriler</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Alışveriş</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-dce9">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">
        <form action="https://forms.nicepagesrv.com/v2/form/process"
          class="u-clearfix u-form-spacing-11 u-form-vertical u-inner-form" source="email" name="form"
          style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-888f" class="u-label">Adı</label>
            <input type="text" placeholder="Adınızı girin" id="name-888f" name="name" class="u-input u-input-rectangle"
              required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-888f" class="u-label">Soyadı</label>
            <input type="text" placeholder="Geçerli bir e-posta adresi girin" id="email-888f" name="email"
              class="u-input u-input-rectangle" required="">
          </div>
          <div class="u-form-group u-form-group-3">
            <label for="text-de91" class="u-label">Cep Telefonu</label>
            <input type="number" placeholder="" id="text-de91" name="text" class="u-input u-input-rectangle">
          </div>
          <div class="u-form-group u-form-group-4">
            <label for="text-cd7d" class="u-label">Doğum Tarihi</label>
            <input type="date" placeholder="" id="text-cd7d" name="text-1" class="u-input u-input-rectangle">
          </div>
          <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Kaydet</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Bilgileriniz Güncellendi. </div>
          <div class="u-form-send-error u-form-send-message"> Bilgileriniz Güncellenemedi. Lütfen hataları düzeltin ve
            tekrar deneyin. </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="9bfb2388-8725-da11-403c-a37036628e2c">
        </form>
      </div>
      <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-1"></div>
      <h4 class="u-text u-text-1">E-posta<br>
      </h4>
      <div class="u-form u-form-2">
        <form action="https://forms.nicepagesrv.com/v2/form/process"
          class="u-clearfix u-form-spacing-11 u-form-vertical u-inner-form" source="email" name="form"
          style="padding: 10px;">
          <div class="u-form-email u-form-group">
            <label for="email-888f" class="u-form-control-hidden u-label"></label>
            <input type="email" placeholder="Geçerli bir e-posta adresi girin" id="email-888f" name="email"
              class="u-input u-input-rectangle" required="">
          </div>
          <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2">Kaydet</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! E-Posta'nız Güncellendi. </div>
          <div class="u-form-send-error u-form-send-message"> E-Posta'nız Güncellenemedi. Lütfen hataları düzeltin ve
            tekrar deneyin. </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="9bfb2388-8725-da11-403c-a37036628e2c">
        </form>
      </div>
      <div class="u-border-2 u-border-grey-dark-1 u-line u-line-horizontal u-opacity u-opacity-40 u-line-2"></div>
      <h4 class="u-text u-text-default u-text-2">Şifre<br>
      </h4>
      <div class="u-form u-form-3">
        <form action="https://forms.nicepagesrv.com/v2/form/process"
          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form-1"
          style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-277c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Mevcut Şifre" id="name-277c" name="name" class="u-input u-input-rectangle"
              required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-277c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Yeni Şifre" id="email-277c" name="email" class="u-input u-input-rectangle"
              required="">
          </div>
          <div class="u-form-group u-form-group-10">
            <label for="text-aba1" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Yeni Şifre Tekrarı" id="text-aba1" name="text"
              class="u-input u-input-rectangle">
          </div>
          <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style u-btn-2">Kaydet</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Teşekkür ederiz! Şifreniz Güncellendi. </div>
          <div class="u-form-send-error u-form-send-message"> ifreniz Güncellenemedi. Lütfen mevcut şifrenizi doğru
            giriniz ve
            tekrar deneyiniz. </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="9bfb2388-8725-da11-403c-a37036628e2c">
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



  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-576d">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-26 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-text u-text-default u-text-1">Yemeksepeti</h2>
              </div>
            </div>
            <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                  <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span
                      class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.196 112.196" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-194c"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112.196 112.196" x="0px" y="0px" id="svg-194c"
                        style="enable-background:new 0 0 112.196 112.196;">
                        <g>
                          <circle style="fill:currentColor;" cx="56.098" cy="56.098" r="56.098"></circle>
                          <path style="fill:#FFFFFF;"
                            d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z">
                          </path>
                        </g>
                      </svg></span>
                  </a>
                  <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span
                      class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.197 112.197" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-037f"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112.197 112.197" x="0px" y="0px" id="svg-037f"
                        style="enable-background:new 0 0 112.197 112.197;">
                        <g>
                          <circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"></circle>
                          <g>
                            <path style="fill:#F1F2F2;"
                              d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z">
                            </path>
                          </g>
                        </g>
                      </svg></span>
                  </a>
                  <a class="u-social-url" target="_blank" data-type="Instagram" title="Instagram" href=""><span
                      class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7eb4"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7eb4">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF"
                          d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                        </path>
                        <path fill="#FFFFFF"
                          d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                        </path>
                        <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                      </svg></span>
                  </a>
                  <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href=""><span
                      class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0e51"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0e51">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                      </svg></span>
                  </a>
                  <a class="u-social-url" target="_blank" data-type="Pinterest" title="Pinterest" href=""><span
                      class="u-icon u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link"
                        preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7a74"></use>
                      </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7a74">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M61.1,76.9c-4.7-0.3-6.7-2.7-10.3-5c-2,10.7-4.6,20.9-11.9,26.2c-2.2-16.1,3.3-28.2,5.9-41
            c-4.4-7.5,0.6-22.5,9.9-18.8c11.6,4.6-10,27.8,4.4,30.7C74.2,72,80.3,42.8,71,33.4C57.5,19.6,31.7,33,34.9,52.6
            c0.8,4.8,5.8,6.2,2,12.9c-8.7-1.9-11.2-8.8-10.9-17.8C26.5,32.8,39.3,22.5,52.2,21c16.3-1.9,31.6,5.9,33.7,21.2
            C88.2,59.5,78.6,78.2,61.1,76.9z"></path>
                      </svg></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-border-2 u-border-white u-expanded-width-sm u-expanded-width-xs u-line u-line-horizontal u-opacity u-opacity-40 u-line-1">
      </div>
      <p class="u-align-left u-text u-text-2">Aydınlatma Metni</p>
      <p class="u-align-left u-text u-text-3">C 2023 Yemeksepeti</p>
      <p class="u-align-left u-text u-text-4">Yardım Merkezi</p>
      <p class="u-align-left u-text u-text-5">Çerez Politikası</p>
      <p class="u-align-left u-text u-text-6">Kişisel Verilen Korunması ve İşlenmesi Gizlilik Politikası</p>
      <p class="u-align-left u-text u-text-7">İletişim</p>
      <p class="u-align-left u-text u-text-8">Kullanım Koşulları</p>
      <p class="u-align-left u-text u-text-9">İş Ortağımız Olun</p>
      <p class="u-align-left u-text u-text-10">S. S. S. ve İşlem Rehberi</p>
      <p class="u-align-left u-text u-text-11">Bilgi Toplumu Hizmetleri</p>
      <p class="u-align-left u-text u-text-12">Kurumsal Site</p>
    </div>
  </footer>

  <section class="u-backlink u-clearfix u-grey-80">
    <p class="u-text">
      <span>Created with</span>
    </p>
    <a class="u-link" href="#" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>

</body>

</html>