document.getElementById("sepetButonu").addEventListener("click", function () {
    acKapatSepet();
});

function acKapatSepet() {
    var sepetContainer = document.getElementById("sepetContainer");
    if (sepetContainer.style.display === "none" || sepetContainer.style.display === "") {
        sepetContainer.style.display = "block";
        // Sepet içeriğini burada güncelleyebilirsiniz.
    } else {
        sepetContainer.style.display = "none";
    }
}

function kapatSepet() {
    var sepetContainer = document.getElementById("sepetContainer");
    sepetContainer.style.display = "none";
}

//////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
    // Sayfa yüklendiğinde sepet içeriğini güncelle
    guncelleSepetIcerik();

    // + ve - butonlarına tıklama event listener'ını ekle
    var sepetListesi = document.getElementById("sepetListesi");

    if (sepetListesi) {
        sepetListesi.addEventListener('click', function (event) {
            var target = event.target;

            // + butonuna tıklanmışsa
            if (target.tagName === 'BUTTON' && target.textContent === '+') {
                var itemId = target.getAttribute('data-item-id');
                artirAzaltSepetItem(itemId, 1);
            }

            // - butonuna tıklanmışsa
            if (target.tagName === 'BUTTON' && target.textContent === '-') {
                var itemId = target.getAttribute('data-item-id');
                artirAzaltSepetItem(itemId, -1);
            }
        });
    }

    // Sepete Ekle butonlarına tıklama event listener'ını ekle
    var addToCartButtons = document.querySelectorAll('.add-to-cart');
    var currentStoreID = null;
    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productId = button.getAttribute('data-product-id');
            var storeId = button.getAttribute('data-store-id');

            if (currentStoreID === null) {
                currentStoreID = storeId;
            } else if (currentStoreID !== storeId) {
                alert("You can only add products from one store at a time.");
                return;
            }

            var productName = button.getAttribute('data-product-name');
            var productPrice = parseFloat(button.getAttribute('data-product-price'));

            var cartItem = {
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1,
                toplamFiyat: toplam
            };

            var cart = JSON.parse(localStorage.getItem('cart')) || [];

            var existingItem = cart.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push(cartItem);
            }

            localStorage.setItem('cart', JSON.stringify(cart));

            guncelleSepetIcerik();

            alert(productName + " added to the cart!");
        });
    });
});

// Sepet içeriğini güncelleyen fonksiyon
function guncelleSepetIcerik() {
    var sepetListesi = document.getElementById("sepetListesi");

    // Kontrol et: sepetListesi var mı?
    if (!sepetListesi) {
        console.error("Hata: sepetListesi bulunamadı!");
        return;
    }

    var toplamFiyat = 0;
    // Sepet içeriğini temizle
    sepetListesi.innerHTML = "";

    // Sepeti localStorage'den al
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Sepet içeriğini doldur
    cart.forEach(function (item) {
        var listItem = document.createElement("li");
        var toplamUrunFiyati = item.quantity * item.price;
        toplamFiyat += toplamUrunFiyati;
        listItem.textContent = item.quantity + " x " + item.name + " - " + toplamUrunFiyati.toFixed(2) + "₺";

        // + butonu ekle
        var artirButton = document.createElement("button");
        artirButton.textContent = "+";
        artirButton.setAttribute('data-item-id', item.id);
        artirButton.addEventListener('click', function () {
            // item nesnesinin bir kopyasını oluştur
            var updatedItem = { ...item };
            updatedItem.quantity++;
            cart[cart.indexOf(item)] = updatedItem;
            guncelleSepetIcerik();
        });

        // - butonu ekle
        var azaltButton = document.createElement("button");
        azaltButton.textContent = "-";
        azaltButton.setAttribute('data-item-id', item.id);
        azaltButton.addEventListener('click', function () {
            // item nesnesinin bir kopyasını oluştur
            var updatedItem = { ...item };
            if (updatedItem.quantity > 1) {
                updatedItem.quantity--;
            }
            cart[cart.indexOf(item)] = updatedItem;
            guncelleSepetIcerik();
        });

        // Butonları listItem içine ekle
        listItem.appendChild(artirButton);
        listItem.appendChild(azaltButton);

        sepetListesi.appendChild(listItem);
    });


    // Toplam fiyatı güncelle
    var toplamFiyatElement = document.getElementById("toplamFiyat");
    if (toplamFiyatElement) {
        toplamFiyatElement.textContent = "Toplam Fiyat: " + toplamFiyat.toFixed(2) + "₺";
    } else {
        console.error("Hata: toplamFiyatElement bulunamadı!");
    }
}

// + ve - butonlarına tıklanınca sepet öğesini güncelleyen fonksiyon
function artirAzaltSepetItem(itemId, amount) {
    var cart = JSON.parse(localStorage.getItem('cart')) || [];
    var item = cart.find(item => item.id === itemId);

    if (item) {
        // item nesnesinin bir kopyasını oluştur
        var updatedItem = { ...item };
        updatedItem.quantity += amount;

        // Eğer miktar 0'dan küçükse, item'i sepetten kaldır
        if (updatedItem.quantity <= 0) {
            cart = cart.filter(cartItem => cartItem.id !== itemId);
        } else {
            cart[cart.indexOf(item)] = updatedItem;
        }

        // Sepeti güncelle
        localStorage.setItem('cart', JSON.stringify(cart));

        // Sepet içeriğini güncelle
        guncelleSepetIcerik();
    }

}

//////////////////////////////////


function odemeYap() {
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart.length === 0) {
        alert("Your cart is empty. Add items to proceed.");
        return;
    }

    var araToplam = cart.reduce(function (total, item) {
        return total + item.quantity * item.price;
    }, 0);

    // Check the minimum cart amount based on the current store
    var minimumCartAmount = 100; // Replace with the actual minimum amount for the current store

    if (araToplam < minimumCartAmount) {
        alert("Minimum cart amount not reached. Please add more items to proceed.");
        return;
    }

    // ... (existing code)
}


// Ödeme butonuna tıklandığında çağrılacak fonksiyon
function odemeYap() {
    // Sepeti localStorage'den al
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Sepetin boş olup olmadığını kontrol et
    if (cart.length === 0) {
        alert("Sepetiniz boş. Ödeme yapmak için ürün ekleyin.");
        return;
    }

    // Dükkan adını al (örneğin, ilk ürünün dükkan adını referans alalım)
    var dukkanAdi = cart[0].dukkandi; // Bu bilgiyi sepete eklediğiniz yerden almalısınız

    // Ödeme sayfasındaki div elementini seç
    var odemeDiv = document.getElementById("odemeDetay");

    // Odeme detaylarını içeren bir string oluştur
    var odemeDetaylari = "<h2>Siparişiniz</h2>";
    odemeDetaylari += "<p>" + dukkanAdi + "</p>";

    // Sepet içeriğini dolaş
    cart.forEach(function (item) {
        odemeDetaylari += "<p>" + item.quantity + " x " + item.name + "<br> " + item.price.toFixed(2) + " TL</p>";
    });

    // Ara toplamı hesapla
    var araToplam = cart.reduce(function (total, item) {
        return total + item.quantity * item.price;
    }, 0);

    // Gönderim ücretini ve toplamı ekleyerek ödeme detaylarını güncelle
    odemeDetaylari += "<p>Ara Toplam: " + araToplam.toFixed(2) + " TL</p>";
    odemeDetaylari += "<p>Gönderim Ücreti: Ücretsiz</p>";
    odemeDetaylari += "<p>Toplam (KDV Dahil): " + araToplam.toFixed(2) + " TL</p>";

    // Ödeme sayfasındaki div'e içeriği ekle
    odemeDiv.innerHTML = odemeDetaylari;

    // Ödeme sayfasına yönlendirme yap (örneğin, odeme.php sayfasına yönlendirme)
    window.location.href = "odeme.php";
}

// Ödeme butonuna tıklanınca odemeYap fonksiyonunu çağır
var odemeButonu = document.querySelector('a[href="odeme.php"]');
if (odemeButonu) {
    odemeButonu.addEventListener('click', function (event) {
        event.preventDefault(); // Sayfa yenilemesini önlemek için
        odemeYap();
    });
}


document.addEventListener("DOMContentLoaded", function () {
    var odemeLink = document.querySelector('a[href="checkout.php"]');

    if (odemeLink) {
        odemeLink.addEventListener('click', function (event) {
            // Sepet içeriğini localStorage'dan al
            var cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Ödeme sayfasına göndermek için bir form oluştur
            var form = document.createElement('form');
            form.action = 'checkout.php';
            form.method = 'post';

            // Sepet içeriğini bir gizli input ile form içine ekle
            var cartInput = document.createElement('input');
            cartInput.type = 'hidden';
            cartInput.name = 'cart';
            cartInput.value = JSON.stringify(cart);
            form.appendChild(cartInput);

            // Formu sayfaya ekle ve submit et
            document.body.appendChild(form);
            form.submit();

            // Formu sayfadan kaldır
            document.body.removeChild(form);

            // Sayfa yenilemesini engelle
            event.preventDefault();
        });
    }
});



