<?php
echo "<h1>merhabaaa</h1>";
echo(180+13)*5;
echo "<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>esma</h1>";
$ad = "esma";
$soyad = "ozkul";

echo $ad."&nbsp;&nbsp;&nbsp;&nbsp;".$soyad."<br>" ;
echo $ad." ".$soyad;

$urunAdi= "windows";
echo "ürün adi=" .$urunAdi. ":Türü = " .gettype($urunAdi);
echo "<br>";

$fiyat= 65000;
echo  "ürün fiyatı" .$fiyat. ":Türü = "  .gettype($fiyat);
echo "<br>";

$oran= 0.25;
echo  $oran. ":Türü = "  .gettype($oran);
echo "<br>";

$mantiksal= false;
echo  $mantiksal. ":Türü = "  .gettype($mantiksal);
echo "<br>";

$mantiksal2= (int)false;
echo  $mantiksal2. ":Türü = "  .gettype($mantiksal2);
echo "<br>";

$sayi1= (int)20.65;
echo  $sayi1. ":  "  .gettype($sayi1);
echo "<br>";

$sayi2= (int)"20";
echo  $sayi2. ":  "  .gettype($sayi2);
echo "<br>";

$sayi3= (int)"esma35";
echo  $sayi3. ":  "  .gettype($sayi3);
echo "<br>";
?>