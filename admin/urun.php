<?php include("../baglan.php");
// a.php sayfasında
session_start();
// Oturumda kullanıcı adı kontrolü
if (isset($_SESSION['username'])) {
  $nick = $_SESSION['username'];
  
if (isset($_GET['id'])) {
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
    <title>urun</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="urun.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
  
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="urun">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">

  <?php include("navbar.php");?>

    <section class="u-border-1 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-section-1" id="sec-30f1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-11-xl u-size-13-lg u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-1">
                    <div class="u-container-layout u-valign-bottom-xl u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                     
                  <?php 
                  if ($result) {
          // Veritabanından dükkanları çek
          while ($row = mysqli_fetch_assoc($result)) {
          $RestoranAdi = $row['dukkan_adi'];
          $Minsepet = $row['dukkan_mstutar'];
      $DukkanResim = $row['dukkan_resmi_adi'];
          $DukkanID = $row['dukkan_id'];
          
          ?>
           <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="<?php echo $DukkanResim; ?>" alt="" data-image-width="200" data-image-height="200">
                    </div>
                  </div>
                  <div class="u-container-align-center-sm u-container-style u-layout-cell u-size-47-lg u-size-47-md u-size-47-sm u-size-47-xs u-size-49-xl u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h3 class="u-text u-text-1"><?php echo $RestoranAdi; ?> Dükkanına Ürün Ekleme</h3>
                      <h6 class="u-text u-text-2">Minimum Sepet Tutarı <?php echo $Minsepet; ?> ₺ dir.</h6>
                    </div>
                  </div>
                  <?php
        }
      } else {
        echo "Sonuc Yok.";
      }
      ?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-center u-form u-form-1">

        <form action="urunekle.php"  method="post" enctype="multipart/form-data" style="padding: 10px;">
            

            <div class="u-form-group u-form-name">
            <label class="u-label">Ürün Resmi</label>
            <input type="file" class="u-input" name="resim"/>
            </div>

            <div class="u-form-group u-form-name">
              <label class="u-label">Ürün Adı</label>
              <input type="text"  name="urun_adi" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label class="u-label">Fiyatı</label>
              <input type="text" name="urun_fiyati" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <input type="hidden" name="urun_dukkani" value="<?php echo($secilenDukkan)?>">

<br>
              <input type="submit" value="KAYDET" >
            </div>
          </form>

        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-b89a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-text u-text-default u-text-1"><?php echo $RestoranAdi; ?> &nbsp; &gt; &nbsp;&nbsp; Ürünler</h5>
        <div class="custom-expanded u-align-center u-list u-list-1">
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
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="custom-expanded u-border-2 u-border-black u-border-no-left u-border-no-top u-image u-image-contain u-image-round u-radius u-image-1" src="<?php echo ($Resim)?>" alt="" data-image-width="1000" data-image-height="731">
                <h5 class="u-text u-text-2"><?php echo ($UrunAdi)?><br>
                </h5>
                <h6 class="u-align-right u-text u-text-3"><?php echo ($Fiyat)?> ₺</h6>
                <a href="urunsil.php?id=<?php echo ($UrunID)?>" class="u-align-center-xs u-border-1 u-border-active-custom-color-1 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius u-text-active-custom-color-1 u-text-hover-white u-btn-1">sil<br>
                </a>
              </div>
            </div>

            
      <?php
        }
      } else {
        echo "Belirtilen şehirde dükkan bulunamadı.";
      }?>
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