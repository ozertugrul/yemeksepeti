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
  <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

  <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
</head>


<body style="background-color: #333; color: #fff" data-path-to-root="./" data-include-products="false"
  class="u-body u-xl-mode" data-lang="tr">

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
      <h5 style="margin-top: 50px;" class="u-text u-text-default u-text-3">Önceki Siparişlerim</h5>
      <div id="ship">

        <?php
        $KullaniciID = $_SESSION["KullaniciID"];
        // SQL sorgusu hazırlanır
        $sql = "SELECT * FROM siparisler WHERE KullaniciID = $KullaniciID ORDER BY SiparisID DESC";
        $result = $conn->query($sql);

        // Sipariş varsa ekrana yazdırılır, yoksa uygun mesaj yazdırılır
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {?>
            
            <div class="abc">
              <p> <strong> Sipariş Numarası:  <?php echo $row["SiparisID"]?></strong>  </p>
           <p> Tarih: <?php echo $row["Tarih"] ?> </p>
           <p> İçerik: <?php echo  $row["Detay"]?> </p> 
            </div>
           <div class="yatay-ayirici">

           </div>
            
             <?php
          }
        } else {
          // Henüz sipariş vermemiş mesajını yazdır
          echo "Henüz sipariş vermemişsiniz gibi görünüyor.";
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
        ?>

      </div>

    </div>

  </section>

  <style>
    p{
      margin: 0px!important;
    }
    .yatay-ayirici {
      width: 100%;
      height: 2px;
      background-color: #000; /* Ayırıcı rengi */
      margin: 10px 0; /* İstenilen boşluk miktarı */
    }
    .ship{
      justify-content: center;
      font-size: 2rem !important;
      display: flex;
      align-items: center;

    }
    .ship .ul{
      display: inline;
      font-size: 2rem !important;
    }
    .abc{
      
      position: relative;
      margin: auto; 
      font-size: 1.125rem !important;

    }


  </style>

  <?php

  include("footer.php") ?>

</body>

</html>