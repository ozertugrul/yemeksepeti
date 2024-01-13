<?php
include("../baglan.php");

// Veritabanından şehirleri çek
$query = "SELECT * FROM Sehirler ORDER BY SehirAd ASC";
$result = mysqli_query($conn, $query);

if ($result) {
?>
  <?php

  session_start();

  // Oturumda kullanıcı adı kontrolü
  if (isset($_SESSION['username'])) {
    $nick = $_SESSION['username'];

  ?>

    <!DOCTYPE html>
    <html style="font-size: 16px;" lang="tr">

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <title>sehirsec</title>
      <link rel="stylesheet" href="nicepage.css" media="screen">
      <link rel="stylesheet" href="sehirsec.css" media="screen">
      <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
      <meta name="generator" content="Nicepage 6.2.1, ">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



      <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/OMAAdminPanel.png"
        }
      </script>
      <meta name="theme-color" content="#478ac9">
      <meta property="og:title" content="sehirsec">
      <meta property="og:type" content="website">
      <meta data-intl-tel-input-cdn-path="intlTelInput/">
    </head>

    <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">

      <?php include("navbar.php"); ?>


      <section class="u-clearfix u-section-1" id="sec-450c">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h3 class="u-text u-text-default u-text-1">Hangi şehirdesin hemen seç restoranları listeleyelim 😊</h3>
          <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $sehirAd = $row['SehirAd'];
              ?>
                <a href="dukkan.php?sehir=<?php echo $sehirAd; ?>">
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



      <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7ae9">
        <div class="u-clearfix u-sheet u-sheet-1">
          <p class="u-small-text u-text u-text-variant u-text-1">Örnek metin. Metin Öğesini seçmek için tıklayın.</p>
        </div>
      </footer>


    </body>

    </html>
  <?php
  } else {
    // Kullanıcı oturumu yoksa, başka bir işlem yapabilirsiniz (örneğin, giriş sayfasına yönlendirme)
    header("Location: index.php");
    exit(); // Diğer işlemleri engellemek için exit() kullanabilirsiniz
  }
  ?>

<?php
}
?>