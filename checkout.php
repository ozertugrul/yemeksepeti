<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="assets/js/ertu.js" defer=""></script>
    <link rel="stylesheet" href="orders/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="orders/css/Giriş.css" media="screen">
    <script class="u-script" type="text/javascript" src="orders/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="orders/js/nicepage.js" defer=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="nc.css" media="screen">
    <script class="u-script" type="text/javascript" src="assets/js/ertu.js" defer=""></script>

    <script class="u-script" type="text/javascript" src="jq.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nc.js" defer=""></script>
    <title>Ödeme</title>
</head>

<body>


    <h2>Sepet İçeriği</h2>

    <?php
    session_start();

    $KullaniciID = $_SESSION["KullaniciID"];

    // Sepet içeriğini localStorage'dan al
    $cart = json_decode($_POST['cart'], true);

    if ($cart) {
        // Sepet boş değilse içeriği yazdır
        echo '<ul>';
        $totalPrice = 0;
        foreach ($cart as $item) {
            echo '<li>' . $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . ' ₺</li>';
            $totalPrice += $item['quantity'] * $item['price'];

        }
        
        echo '</ul>';
        echo '<br> <p> Toplam Tutar: ' . $totalPrice . ' ₺</p>';


    } else {
        echo '<p>Sepet boş.</p>';
    }
    ?>

    <form action="checkoutorder.php" method="POST">
        
        <input type="hidden" name="siparisdetay" value="<?php
        $cart = json_decode($_POST['cart'], true);

        if ($cart)  {
            // Sepet boş değilse içeriği yazdır
            echo '<ul>';
            $totalPrice = 0;
            foreach ($cart as $item) {
                echo '<li>' . $item['quantity'] . ' x ' . $item['name'] . ' - ' . ($item['quantity'] * $item['price']) . ' ₺</li>';
                $totalPrice += $item['quantity'] * $item['price'];
    
            }
            echo '</ul>';
            echo '<br> <p> Toplam Tutar: ' . $totalPrice . ' ₺</p>';
            
    
    
    
        } else {
            echo '<p>Sepet boş.</p>';
        }

        ?>">

        <input type="submit" value="Siparişi Tamamla">
    </form>


 


</body>

</html>