<?php
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

// Veritabanından şehirleri çek
$query = "SELECT * FROM Sehirler ORDER BY SehirAd ASC";
$result = mysqli_query($conn, $query);

if ($result) {
  ?>
  <!DOCTYPE html>
  <html style="font-size: 16px;" lang="tr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>mainpage</title>
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>
    <link rel="stylesheet" href="orders/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="orders/css/Giriş.css" media="screen">
    <link rel="stylesheet" href="nc.css" media="screen">
    <link rel="stylesheet" href="sehirsec.css" media="screen">
    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
  </head>

  <body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false"
    class="u-body u-xl-mode" data-lang="tr">


    <?php
    include("navbar.php");
    ?>
    <section class="u-clearfix u-section-1" id="sec-450c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Hangi şehirdesin hemen seç restoranları listeleyelim 😊</h3>
        <div
          class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
              $sehirAd = $row['SehirAd'];
              ?>
              <a href="restoran.php?sehir=<?php echo $sehirAd; ?>">
                <div
                  class="u-align-center u-border-1 u-border-grey-60 u-container-style u-custom-color-1 u-list-item u-radius u-repeater-item u-shape-round u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h5 class="u-align-center u-text u-text-default u-text-2">
                      <?php echo $sehirAd; ?> <br>
                    </h5>
                  </div>
                </div>
              </a>
            <?php } ?>


          </div>
        </div>
      </div>
    </section>

    <?php include("footer.php") ?>





  </body>

  </html>
  <?php
}
?>