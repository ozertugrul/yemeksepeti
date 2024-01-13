<?php
include("baglan.php");

// Veritabanından şehirleri çek
$query = "SELECT * FROM Sehirler ORDER BY SehirAd ASC";
$result = mysqli_query($conn, $query);

if ($result) {
    ?>
    <!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>mainpage</title>
    <link rel="stylesheet" href="nc.css" media="screen">
<link rel="stylesheet" href="sehirsec.css" media="screen">
    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="mainpage">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr"><header class="u-box-shadow u-clearfix u-header u-header" id="sec-68d1"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="index.php" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>

          <?php
           // 1 yerine hafızadaki idyi yazdırcaz DÜZENLENECEK
$sorgu = "SELECT Adi FROM `kullanicilar` WHERE KullaniciID=1";
$sonuc = mysqli_query($conn, $sorgu);

if ($sonuc) {
    $sutun = mysqli_fetch_assoc($sonuc);
    $adimiz = $sutun['Adi'];
    ?>

          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;"><?php echo $adimiz; ?></a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Siparişlerim</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Hesabım</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Yardım Merkezi</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Çıkış Yap</a>
              </li>
            </ul>
           </div>

        <?php } 
        ?>

</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link">user_name</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Siparişlerim</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Hesabım</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Yardım Merkezi</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Çıkış Yap</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><span class="u-file-icon u-icon u-icon-1" data-href="#"><img src="images/102665.png" alt=""></span>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-450c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Hangi şehirdesin hemen seç restoranları listeleyelim 😊</h3>
        <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sehirAd = $row['SehirAd'];
                            ?>
                            <a href="restoran.php?sehir=<?php echo $sehirAd; ?>">
            <div class="u-align-center u-border-1 u-border-grey-60 u-container-style u-custom-color-1 u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h5 class="u-align-center u-text u-text-default u-text-2"><?php echo $sehirAd; ?> <br>
                </h5>
              </div>
            </div>
                        </a>
                        <?php } ?>
                        

          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7ae9"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Örnek metin. Metin Öğesini seçmek için tıklayın.</p>
      </div></footer>
  
  
</body></html>
<?php
}
?>
