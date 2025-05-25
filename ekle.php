<?php
include "ayar.php";

$sorgu = "INSERT INTO urunler(adi, fiyat, onay) VALUES ('elma', 30, 0)";
mysqli_query($baglanti, $sorgu);

mysqli_close($baglanti);
?>
