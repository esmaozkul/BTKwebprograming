<?php
/*
$ogrenciler=array("ali","ayse", "ahmet","mehmet","sila","duygu");

foreach ($ogrenciler as $ogrenci) {
      echo $ogrenci."<br>";
}

$arananogr ="zeki";
$sonuc=false;


foreach ($ogrenciler as $ogrenci) {
    if ($ogrenci=$arananogr) {
        echo  "aranan ogr bulunmaktadır <br>";
        $sonuc=true;
    }
}
if(!$sonuc){
    echo "aranan ögr bulunamamaktadır.";
}

for ($i=0; $i < 6; $i++) { 
    echo $ogrenciler[$i]."<br>";
}

$menu=array("ana sayfa","hakkımda", "projeler","başarılar","iletişim","kardes siteler");

for ($i=0; $i < count($menu); $i++) { 
    echo $menu[$i]."<br>";
}

$i=0;
while ($i < count($menu)) {
    echo $menu[$i]."<br>";
    $i++;
}

*/

/*
$urunler = array(
    array("Imac","100000"),
    array("macbook","750000"),
    array("Ipod","30000"),
);

foreach ($urunler as $urun) {
    echo $urun[0]." ".$urun[1]."<br>";
}
*/

$urunler = array(
    "100"=> array(
    "urun adı"=> "Imac",
    "fiyat"=>"100000"
    ),
    "200"=> array(
    "urun adı"=> "macbook",
    "fiyat"=>"750000"
    ),
    "300"=> array(
    "urun adı"=> "Ipod",
    "fiyat"=>"30000"
    ),
);


foreach ($urunler as $key => $value) {
    echo $key." " .$value["urun adı"]." ".$value["fiyat"]."<br>";
}



$standart = array(
 "100"=> "macbook",
 "200"=> "Imac",
 "300"=>"Ipod"
);

foreach ($standart as $anahtar => $deger) {
    echo $anahtar." " .$value["urun adı"]." ".$value["fiyat"]."<br>";
}



?>