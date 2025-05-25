<?php
/*
$sayi1=55;
$sayi2=35;


echo "sonuc =".($sayi1+$sayi2). "<br>";
echo "sonuc =".($sayi1-$sayi2). "<br>";
echo "sonuc =".($sayi1*$sayi2). "<br>";
echo "sonuc =".(($sayi1*$sayi2)+8). "<br>";

echo is_int(15)."<br>";
echo var_dump(is_int("15"))."<br>";
echo var_dump(is_int(9.44))."<br>";
echo var_dump(is_float(9.44))."<br>";

echo abs(-24)."<br>";
echo ceil(5.8)."<br>";
echo ceil(5.1)."<br>";
echo floor(5.8)."<br>";
echo floor(5.1)."<br>";
echo round(5.8)."<br>";
echo round(5.1)."<br>";
echo round(5.5)."<br>";
echo sqrt(144). "<br>";
echo pow(5,3). "<br>";
echo pow($sayi2,2)."<br>";
echo max(12,5,35,$sayi1)."<br>";
echo min(12,5,35,$sayi1)."<br>";
*/

/*define("baglanti","mysql baglantisi");

echo baglanti;*/
/*sabitlerde $ işareti koymuyoruz
 değişken değiştirmek istersek $ kullanılır
 değiken değiştirme durumu dolar işaretli olanlarda geçerli */
 /* const veri türünü belirtiyoruz*/

const baglanti = "mysql baglantisi";
const kullanciAdi="esma";
const kullanciSifre="12345";

echo kullanciAdi."<br>";
echo " ".kullanciSifre."<br>";


$baglanti ="deneme";
$Baglanti ="deneme2";

echo baglanti;
echo baglanti."<br>";
echo $baglanti."<br>";
echo $baglanti."<br>";
echo $Baglanti[2]."<br>";;
$baglanti=45;
echo $baglanti."<br>";
echo ($baglanti*2)."<br>";

?>