<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YemekSepeti</title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
  <nav>
  <h1 style="margin-left: auto;">YemekSepeti</h1>
    <input type="text" placeholder="Ürün Ara...">
    <button style="margin-right: auto;">Ara</button>
    <a href="form.php"><button> Giriş Yap</button></a>
  </nav>
  <section>
    <div class="store">
      <img src="https://placekitten.com/300/150" alt="Ürün Resmi">
      <div class="store-info">
        <h2>Mağaza Adı 1</h2>
        <p>Ürün Açıklaması 1</p>
      </div>
    </div>
    <div class="store">
      <img src="https://placekitten.com/300/150" alt="Ürün Resmi">
      <div class="store-info">
        <h2>Mağaza Adı 2</h2>
        <p>Ürün Açıklaması 2</p>
      </div>
    </div>
    <!-- Diğer mağazalar ve ürünleri buraya ekleyebilirsiniz -->
  </section>
  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>
</body>
</html>
