<?php include("baglan.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $secilenDukkan = @$_GET["id"];
    $sql = "SELECT * FROM `dukkanlar` WHERE `dukkan_id`=$secilenDukkan";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>dukkan</title>
    <link rel="stylesheet" href="nc.css" media="screen">
<link rel="stylesheet" href="dukkan.css" media="screen">
    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="dukkan">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr"><header class="u-box-shadow u-clearfix u-header u-header" id="sec-68d1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="2560" data-image-height="501">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" >
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-070d"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-070d" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.52,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.346-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z"></path></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">user_name</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-radius u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Siparişlerim</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Hesabım</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Yardım Merkezi</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#">Çıkış Yap</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link">user_name</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-radius u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Siparişlerim</a>
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
    <section class="u-border-1 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-section-1" id="sec-30f1">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                <?php 
                  if ($result) {
          // Veritabanından dükkanları çek
          while ($row = mysqli_fetch_assoc($result)) {
          $RestoranAdi = $row['dukkan_adi'];
          $Minsepet = $row['dukkan_mstutar'];
      $DukkanResim = $row['dukkan_resmi_adi'];
          $DukkanID = $row['dukkan_id'];
          ?>
                  <div class="u-container-style u-layout-cell u-size-11-xl u-size-13-lg u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-1">
                    <div class="u-container-layout u-valign-bottom-xl u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                      <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="admin/<?php echo $DukkanResim; ?>" alt="" data-image-width="200" data-image-height="200">
                    </div>
                  </div>
                  <div class="u-container-align-center-sm u-container-style u-layout-cell u-size-47-lg u-size-47-md u-size-47-sm u-size-47-xs u-size-49-xl u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      
                      <h3 class="u-align-center-sm u-align-center-xs u-text u-text-2"><?php echo $RestoranAdi; ?></h3>
                      <h6 class="u-align-center-sm u-align-center-xs u-text u-text-3">Minimum Sepet Tutarı <?php echo $Minsepet; ?> ₺</h6>
                    </div>
                  </div>
                </div>
              </div>
              <?php
        }
      } else {
        echo "Belirtilen şehirde dükkan bulunamadı.";
      }
      ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-b89a">
      <div class="u-clearfix u-sheet u-sheet-1">
      <h5 class="u-text u-text-default u-text-1"><a style="color:#cd0048 !important;" href="sehirsec.php">Şehirler </a> &nbsp;&nbsp;&gt;&nbsp;&nbsp; Restoranlar &nbsp;&nbsp; &gt; &nbsp;&nbsp;<?php echo $RestoranAdi; ?></h5>
      
        <h4 class="u-text u-text-default u-text-1">Tüm Ürünler</h4>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            
          <?php
            // SQL sorgusu
          $sql = "SELECT * FROM `urunler` WHERE `DukkanID`=$secilenDukkan";
          $result = mysqli_query($conn, $sql);

          if ($result) {
          // Veritabanından dükkanları çek
          while ($row = mysqli_fetch_assoc($result)) {
          $UrunID = $row['UrunID'];
          $UrunAdi = $row['UrunAdi'];
          $Fiyat = $row['Fiyat'];
          $Resim =  $row['UrunResmi'];
          ?>
          <div class="u-border-2 u-border-grey-60 u-container-style u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-xl u-container-layout-1">
                <img class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-expanded-width u-image u-image-contain u-image-round u-radius u-image-1" src="admin/<?php echo ($Resim)?>" alt="" data-image-width="1000" data-image-height="731">
                <h5 class="u-text u-text-2"><?php echo ($UrunAdi)?><br></h5>
                <h6 class="u-align-right u-text u-text-3"><?php echo ($Fiyat)?>₺</h6>
                <a href="https://nicepage.dev" class="u-align-center-xs u-border-1 u-border-active-custom-color-1 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius u-text-active-custom-color-1 u-text-hover-white u-btn-1">+</a>
              </div>
            </div>



      <?php
        }
      } else {
        echo "Belirtilen şehirde dükkan bulunamadı.";
      }
      ?>
           

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

else {
    // Eğer POST isteği yoksa, bir hata mesajı yazdır
    echo "Hatalı istek!";
}
?>