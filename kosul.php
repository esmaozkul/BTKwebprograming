<?php
$yas=22;
 
$sonuc= ($yas>=18)? "sen bir yetişkinsin" : "sen bir çocuksun";

echo $sonuc;


$sayi1=15;
$sayi2=30;
echo "<br>";
$sonuc = ($sayi1>$sayi2 ? "sayi1 daha büyük": 
         ($sayi1==$sayi2 ?"ikiside esit":"sayi2 daha büyük")) ;
echo $sonuc;
echo "<br>";
$yas =45;
$cinsiyet="erkek";
$sonuc1=($yas>40)?
        (($cinsiyet=="erkek")?
        "Kaybedenler kulubune hos geldiniz":
        "cinsiyet uymuyor"
        ):"yaşınız kurtarmıyor";

echo $sonuc1;
echo "<br>";

$maas=120000;
if($maas>150000){
    echo "ooo iyisinnn";
}else{
    echo "Allah yardımcın olsunnnn canoooo...";
}
echo "<br>";

$yas3 =25;
if($yas3>65){
    echo "sen emeklisin";
}elseif($yas3>30){
  echo "sen olgunsun";
}elseif($yas3>18){
    echo "sen gençsin";
}else{
    echo "sen bir çocuksun";
}
echo "<br>";
//vize %30 u final yüzde %70i
//100 den büyük alan hata 
//90-100 A
//80-90 B
//70-80 C
//60-70 D
//50-60 E
//50 den küçükse failed kaldı yani

$vize=70;
$final=50;
$ortalama = ($vize * 0.3) + ($final * 0.7);
echo $ortalama;
if($ortalama>100){
    echo "hata ";
}elseif($ortalama>=90){
    echo "A";
}elseif($ortalama>=80){
    echo "B";
}elseif($ortalama>=70){
    echo "C";
}elseif($ortalama>=60){
    echo "D";
}else{
    echo "seneye tekrar görüşürükkkk";
}
echo "<br>";

// switch case durum sonuç 
$sonuc2=3;
switch ($sonuc2) {
    case '1':
        echo "birinci seçenek aktif";
        break;
    case '2':
        echo "ikinci seçenek aktif";
        break;
        case '3':
        echo "üçüncü seçenek aktif";
        break;

    default:
        echo "yanlış seçenek";
        break;
}
echo "<br>";
$gun =3;
switch ($sonuc2) {
    case '1':
        echo "pazartesi";
        break;
    case '2':
        echo "salı";
        break;
        case '3':
        echo "çarşamba";
        break;
        case '4':
        echo "perşembe";
        break;
        case '5':
        echo "cuma";
        break;
        case '6':
        echo "cumartesi";
        break;
        case '7':
        echo "pazar";
        break;

    default:
        echo "hatalı  seçenek";
        break;
}
echo "<br>";

$gun =3;
switch ($sonuc2) {
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
    echo "haftaiçi";
    break;
    case '6':
    case '7':
    echo "haftasonu";
    break;
    default:
        echo "hatalı  seçenek";
        break;
}
echo "<br>";



?>