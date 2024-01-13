<?php include("../baglan.php");
session_start();

// Oturumda kullanıcı adı kontrolü
if (isset($_SESSION['username'])) {
  $nick = $_SESSION['username'];
   





if (isset($_GET['sehir'])) {
    $selectedCity = @$_GET["sehir"];
    
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>dukkan</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="dukkan.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/OMAAdminPanel.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="dukkan">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
  <?php include("navbar.php");?>
    <section class="u-align-center u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-section-1" id="sec-8d47">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center u-text u-text-1"><?php echo($selectedCity) ?> Şehrine Dükkan Ekle</h3>
        <div class="u-align-center u-form u-form-1">


          <form action="dukkanekle.php"  method="post" enctype="multipart/form-data" style="padding: 10px;">
            <p class="u-form-group u-form-text u-text u-text-2">Dükkan Logosu&nbsp;</p>
            <input type="file" name="resim"/>
            <div class="u-form-group u-form-name">
              <label class="u-label">Dükkan Adı</label>
              <input type="text"  name="dukkan_adi" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label class="u-label">Minimum Sepet Tutarı</label>
              <input type="text" name="mst" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-message">
              <label class="u-label">Dükkan Adresi</label>
              <textarea rows="3" cols="50" name="dukkan_adresi" class="u-input u-input-rectangle" required=""></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="hidden" name="dukkan_sehir" value="<?php echo($selectedCity)?>">
              <input type="submit" value="KAYDET" >
            </div>
          </form>


        </div>
      </div>
    </section>
    
    <section class="u-clearfix u-section-2" id="sec-2238">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-align-center u-text u-text-default u-text-1">Şehir Liste &gt; <?php echo($selectedCity) ?> &gt; Dükkanlar</h5>
        <div class="custom-expanded u-align-center u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php
            // SQL sorgusu
          $sql = "SELECT * FROM `dukkanlar` WHERE dukkkan_sehiri = '$selectedCity'";
          $result = mysqli_query($conn, $sql);

          if ($result) {
          // Veritabanından dükkanları çek
          while ($row = mysqli_fetch_assoc($result)) {
          $RestoranAdi = $row['dukkan_adi'];
          $Minsepet = $row['dukkan_mstutar'];
          $DukkanResim = $row['dukkan_resmi_adi'];
          $DukkanID = $row['dukkan_id'];
          ?>
            <div class="u-border-1 u-border-grey-75 u-container-style u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-container-layout-1">
                <img class="custom-expanded u-image u-image-round u-radius u-image-1" src="<?php echo $DukkanResim?>" alt="" data-image-width="400" data-image-height="225">
                <a href="urun.php?id=<?php echo $DukkanID;?>"><h5 class="u-align-left u-text u-text-default u-text-2"><?php echo $RestoranAdi; ?></h5></a>
                <h6 class="u-align-left u-text u-text-default u-text-3"><?php echo $Minsepet; ?>₺ min. sepet tutarı</h6>
                <a href="dukkansil.php?id=<?php echo $DukkanID;?>" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Sil<br>
                </a>
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
} else {
    // Kullanıcı oturumu yoksa, başka bir işlem yapabilirsiniz (örneğin, giriş sayfasına yönlendirme)
    header("Location: index.php");
    exit(); // Diğer işlemleri engellemek için exit() kullanabilirsiniz
}

?>
<?php
} 

else {
    // Eğer POST isteği yoksa, bir hata mesajı yazdır
    header("Location: sehirsec.php");
}
?>