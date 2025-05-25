<?php
$ders = "PHP ile programlama";
$dersAciklama= "Lorem ipsum dolor, 
sit amet consectetur adipisicing elit. 
Placeat aspernatur quos possimus natus distinctio officia
repellendus pariatur vel magnam labore, velit rem expedita quia
voluptatibus rerum cum ex assumenda beatae!";

const title="populer dersler";
#ders isimlerinin ilk karakterleri büyük diğerleri kücük
#ders aciklamasi ilk 25 karakterden sonra(...) ifadesi olcak
#derslinki dersin isminden oluşacak türkçe karakter olmayacak ve küçük harfle gösterilecek

// 1. Ders adının ilk harfini büyük yap, diğerlerini küçük
$dersAdi = ucwords(strtolower($ders));
// 2. Açıklamanın ilk 25 karakterini al ve sonuna "..." ekle
$ozetAciklama = mb_substr($dersAciklama, 0, 25) . "...";
//ders linki ders isminden oluşucak
$dersLink = str_replace([" ","ç","ö","@","."],["-","c","o","","-"],strtolower($ders));

// resim ekleme 
$resim= "images/cicek.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo title ?></h1>
    <p>
        <a href="<?php echo $dersLink ?>"><?php echo $dersAdi ?></a>
    </p>
    <p><?php echo $ozetAciklama ?></p>

    <img src="<?php echo $resim; ?>" alt="Ürün Resmi" width="200">

</body>
</html>