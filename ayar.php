<?php
$host = "localhost";          // Veritabanı sunucusu
$kullanici = "root";          // Veritabanı kullanıcı adı (XAMPP'de genellikle root)
$sifre = "";                  // Şifre (XAMPP'de genellikle boş)
$veritabani = "veritabani"; // Kendi veritabanı adını buraya yaz

$baglanti = mysqli_connect($host, $kullanici, $sifre, $veritabani);

// Bağlantı kontrolü
if (!$baglanti) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
?>
