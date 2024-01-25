function veriyiGuncelle() {
    // Burada veritabanına güncelleme işlemleri yapılır
    // Örnek olarak, AJAX veya Fetch kullanılabilir

    // Veritabanına güncelleme işlemi başarılı ise alert göster
    var veriGuncellendi = true; // Bu değişken veri güncelleme başarılı mı değil mi anlamak için kullanılabilir

    if (veriGuncellendi) {
        alert("Veri başarıyla güncellendi!");
        // Sayfayı yenile
        location.reload(true);
    } else {
        alert("Veri güncelleme sırasında bir hata oluştu!");
    }
}
function kartGuncelle() {
    // Burada veritabanına güncelleme işlemleri yapılır
    // Örnek olarak, AJAX veya Fetch kullanılabilir

    // Veritabanına güncelleme işlemi başarılı ise alert göster
    var kartGuncellendi = true; // Bu değişken veri güncelleme başarılı mı değil mi anlamak için kullanılabilir

    if (kartGuncellendi) {
        alert("Güvenlik nedeniyle kart bilgilerini kaydetmiyoruz.");
        // Sayfayı yenile
        location.reload(true);
    } else {
        alert("Veri güncelleme sırasında bir hata oluştu!");
    }
}