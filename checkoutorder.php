<?php
include("baglan.php");
session_start();

echo '<script>localStorage.removeItem("cart");</script>';


$KullaniciID = $_SESSION["KullaniciID"];


$detay=$_POST['siparisdetay'];
$datea=  date('d.m.Y H:i:s');
$siparisInsertQuery = "INSERT INTO siparisler (KullaniciID, Detay, Tarih ) VALUES ('$KullaniciID', '$detay', '$datea')";



if ($conn->query($siparisInsertQuery) === TRUE) {

    echo "Lütfen Bekleyiniz.";
    echo '<script>alert("Siparişiniz alındı.");</script>';
            echo '<script>
              setTimeout(function() {
                  window.location.href = "order.php";
              }, 1000); // 1    seconds
          </script>';

} else {
    echo "Sipariş alınamadı. " . $conn->error;

}



?>