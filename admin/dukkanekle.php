<?php
include("../baglan.php"); 

$DukkaninAdi=$_POST['dukkan_adi']; 
$minimumsepettutar=$_POST['mst']; 
$dukkaninadresi=$_POST['dukkan_adresi'];
$dukkansehirim=$_POST['dukkan_sehir'];

if (isset($_FILES['resim'])) {
    $hata = $_FILES['resim']['error']; //resim inputundan gönderilen hatayı aldık.
    if ($hata != 0) { // hata kontrolü gerçekleştirdik.
        echo 'Resim gönderilirken bir hata gerçekleşti.';
    } else {
        $resimBoyutu = $_FILES['resim']['size']; // resim boyutunu öğrendik
        if ($resimBoyutu > (1024 * 1024 * 5)) {
            //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
            //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
            //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

            echo 'Resim 2MB den büyük olamaz.';
        } else {
            $tip = $_FILES['resim']['type']; //resim tipini öğrendik.
            $resimAdi = $_FILES['resim']['name']; //resmin adını öğrendik.

            $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
            $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

            $yeni_adi = "dukkanlogo/" . time() . "." . $uzantisi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
            //yuklenecek_yer/resim_adi.uzantisi

            if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_adi)) {
                    //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                    $sql = "INSERT INTO dukkanlar (dukkan_adi, dukkan_adresi, dukkan_mstutar, dukkkan_sehiri, dukkan_resmi_adi) VALUES ('$DukkaninAdi', '$dukkaninadresi', '$minimumsepettutar', '$dukkansehirim', '$yeni_adi')";
                    
                if ($conn->query($sql) === TRUE) {
                        echo "Yeni kayıt başarıyla eklendi";
                    } else {
                        echo "Hata: Aynı Adrese Sahip Birden Fazla Dükkan Olamaz";
                    }
                } else echo 'Resim yüklenirken bir hata oluştu.';
            }
             else {
                echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
            }
        }
    }
}
?>
