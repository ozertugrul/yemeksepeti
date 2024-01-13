<?php
include("../baglan.php");
session_start();

// Oturumda kullanıcı adı kontrolü
if (isset($_SESSION['username'])) {
  $nick = $_SESSION['username'];
   
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>admin</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/OMAAdminPanel.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">

  <?php include("navbar.php");?>

    <section class="u-clearfix u-section-1" id="sec-0a35">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-default u-text-1">Hoşgeldin <?php echo($nick) ?>,<br>
        </h4>
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <a href="sehirsec.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius u-text-custom-color-1 u-text-hover-white u-white u-btn-1">Şehir Seç</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7ae9"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Örnek metin. Metin Öğesini seçmek için tıklayın.</p>
      </div></footer>
    
  
</body></html>

<?php
} else {
    // Kullanıcı oturumu yoksa, başka bir işlem yapabilirsiniz (örneğin, giriş sayfasına yönlendirme)
    header("Location: index.php");
    exit(); // Diğer işlemleri engellemek için exit() kullanabilirsiniz
}

?>
