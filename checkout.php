<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <title>Ödeme</title>
</head>

<body>
    <h2>Sepet İçeriği</h2>

    <?php
    session_start(); // Oturumu başlat
    
    $KullaniciID = $_SESSION["KullaniciID"];

    // Sepet içeriğini localStorage'dan al
    $cart = json_decode($_POST['cart'], true);

    if ($cart) {
        // Sepet boş değilse içeriği yazdır
        echo '<ul>';
        foreach ($cart as $item) {
            echo '<li>' . $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . '₺</li>';
        }
        echo '</ul>';

    } else {
        echo '<p>Sepet boş.</p>';
    }
    ?>

<form action="checkoutorder.php" method="POST">
    <input type="hidden" name="siparisdetay" value="<?php 
    $cart = json_decode($_POST['cart'], true);

    if ($cart) {
        // Sepet boş değilse içeriği yazdır
        echo '<ul>';
        foreach ($cart as $item) {
            echo  $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . '₺' . '<br>';
        }
        echo '</ul>';

        

    } else {
        echo '<p>Sepet boş.</p>';
    }

    ?>">

    <input type="submit" value="Siparişi Tamamla">
</form>


<p id="toplamFiyat">


alooo
</p>
</body>

</html>