<?php include("baglan.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $secilenDukkan = @$_GET["id"];
  $sql = "SELECT * FROM `dukkanlar` WHERE `dukkan_id`=$secilenDukkan";
  $result = mysqli_query($conn, $sql);

  include("baglan.php");


  $ad = $_SESSION["adi"];


  ?>

<?php

if (!isset($_SESSION["KullaniciID"])) {
  echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
  echo '<script>
          setTimeout(function() {
              window.location.href = "index.php";
          }, 2500); // 2 seconds
      </script>';
  exit();

}
?>
  <!DOCTYPE html>
  <html style="font-size: 16px;" lang="tr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>dukkan</title>
    <link rel="stylesheet" href="nc.css" media="screen">
    <link rel="stylesheet" href="dukkan.css" media="screen">
    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
  </head>

  <body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
    <?php
    include("navbar.php");
    ?>

    <section class="u-border-1 u-border-grey-60 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-section-1"
      id="sec-30f1">
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
                      <div
                        class="u-container-style u-layout-cell u-size-11-xl u-size-13-lg u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-1">
                        <div
                          class="u-container-layout u-valign-bottom-xl u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                          <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                            src="admin/<?php echo $DukkanResim; ?>" alt="" data-image-width="200" data-image-height="200">
                        </div>
                      </div>
                      <div
                        class="u-container-align-center-sm u-container-style u-layout-cell u-size-47-lg u-size-47-md u-size-47-sm u-size-47-xs u-size-49-xl u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">

                          <h3 class="u-align-center-sm u-align-center-xs u-text u-text-2">
                            <?php echo $RestoranAdi; ?>
                          </h3>
                          <h6 class="u-align-center-sm u-align-center-xs u-text u-text-3">Minimum Sepet Tutarı
                            <?php echo $Minsepet; ?> ₺
                          </h6>
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
        <h5 class="u-text u-text-default u-text-1"><a style="color:#cd0048 !important;" href="sehirsec.php">Şehirler </a>
          &nbsp;&nbsp;&gt;&nbsp;&nbsp; Restoranlar &nbsp;&nbsp; &gt; &nbsp;&nbsp;
          <?php echo $RestoranAdi; ?>
        </h5>

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
                $Resim = $row['UrunResmi'];
                ?>
                <div
                  class="u-border-2 u-border-grey-60 u-container-style u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
                  <div
                    class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-xl u-container-layout-1">
                    <img
                      class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-expanded-width u-image u-image-contain u-image-round u-radius u-image-1"
                      src="admin/<?php echo ($Resim) ?>" alt="" data-image-width="1000" data-image-height="731">
                    <h5 class="u-text u-text-2">
                      <?php echo ($UrunAdi) ?><br>
                    </h5>
                    <h6 class="u-align-right u-text u-text-3">
                      <?php echo ($Fiyat) ?>₺
                    </h6>
                    <a href="https://nicepage.dev"
                      class="u-align-center-xs u-border-1 u-border-active-custom-color-1 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius u-text-active-custom-color-1 u-text-hover-white u-btn-1">+</a>
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




    <?php include("footer.php") ?>



  </body>

  </html>
  <?php
} else {
  // Eğer POST isteği yoksa, bir hata mesajı yazdır
  echo "Hatalı istek!";
}
?>