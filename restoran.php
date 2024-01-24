<?php include("baglan.php");

include("baglan.php");
session_start();

if (!isset($_SESSION["KullaniciID"])) {
  echo "Lütfen oturum açınız. Anasayfaya Yönlendiriliyorsunuz!";
  echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2500); // 2 seconds
        </script>';
  exit();
  
}

$KullaniciID = $_SESSION["KullaniciID"];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $selectedCity = @$_GET["sehir"];
  ?>

  <!DOCTYPE html>
  <html style="font-size: 16px;" lang="tr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>restoran</title>
    <link rel="stylesheet" href="nc.css" media="screen">
    <link rel="stylesheet" href="restoran.css" media="screen">
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
    
  </head>

  <body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
    <?php
    include("navbar.php");
    ?>
      <section
        class="u-align-center u-clearfix u-container-align-left-lg u-container-align-left-xl u-image u-image-contain u-shading u-section-1"
        id="sec-8d47" data-image-width="1264" data-image-height="842">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h3 class="u-align-left u-text u-text-default u-text-1">
            <?php echo ($selectedCity) ?> Online Siparişi
          </h3>
          <h4 class="u-align-left u-text u-text-default-lg u-text-default-xl u-text-2"> Merhaba
            <?php echo $adimiz; ?>, sipariş vermek için hemen bir restoran seç!
          </h4>
        </div>
      </section>
    <?php }
          ?>
    <section class="u-clearfix u-section-2" id="sec-2238">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-text u-text-default u-text-1"><a style="color:#cd0048 !important;"
            href="sehirsec.php">Şehirler&nbsp;&nbsp; </a> &gt; &nbsp;&nbsp;
          <?php echo ($selectedCity) ?>
        </h5>
        <h3 class="u-text u-text-default u-text-2">Tüm Restoranlar</h3>
        <div class="u-expanded-width u-list u-list-1">
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
                <a href="dukkan.php?id=<?php echo $DukkanID; ?>">
                  <div
                    class="u-border-1 u-border-grey-75 u-container-style u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
                    <div
                      class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                      <img class="u-expanded-width u-image u-image-round u-radius u-image-1"
                        src="admin/<?php echo $DukkanResim; ?>" alt="" data-image-width="400" data-image-height="225">
                      <h5 class="u-align-left u-text u-text-default u-text-3">
                        <?php echo $RestoranAdi; ?>
                      </h5>
                      <h6 class="u-align-left u-text u-text-default u-text-4">
                        <?php echo $Minsepet; ?>₺ min sepet tutarı
                      </h6>
                    </div>
                  </div>
                </a>
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
