<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Yemeksepeti">
  <meta name="description" content="">
  <title>Order</title>
  <link rel="stylesheet" href="orders/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="orders/css/Giriş.css" media="screen">
  <script class="u-script" type="text/javascript" src="orders/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="orders/js/nicepage.js" defer=""></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="nc.css" media="screen">
  <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
</head>

</head>

<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="tr">
    <?php
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
    include("navbar.php");


    ?>

  <section class="u-clearfix u-section-1" id="sec-15d7">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h5 class="u-text u-text-default u-text-1">Aktif Siparişler</h5>
      <p class="u-text u-text-default u-text-2">Aktif siparişiniz bulunmamaktadır.</p>
      <h5 class="u-text u-text-default u-text-3">Önceki Siparişlerim</h5>
      <p class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-4">Henüz sipariş
        vermemişsiniz gibi görünüyor.</p>
    </div>
  </section>

  <?php

  include("footer.php") ?>

</body>

</html>