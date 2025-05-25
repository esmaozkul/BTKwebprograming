<?php 
$takimlar = array("galatasaray","sanli galatasaray","sampion galatasaray","avrupa fatihi galatasaray");
echo  $takimlar[0]."<br>";
echo  $takimlar[1]."<br>";
echo  $takimlar[2]."<br>";
echo  $takimlar[3]."<br>";

$sayilar =array(10,20,30,40,50,60,70,80,90);
echo $sayilar[0]."<br>";;
echo $sayilar[1]."<br>";;
echo $sayilar[2]."<br>";;
echo $sayilar[3]."<br>";;
echo $sayilar[4]."<br>";;
echo $sayilar[5]."<br>";;
echo $sayilar[6]."<br>";;

$karma =array("esma",35,true);
echo $karma[0]."<br>";
echo $karma[1]."<br>";
echo $karma[2]."<br>";

echo $sayilar[0]+$karma[1]."<br>";
echo ($sayilar[0]+$karma[1]."numaralı ogrenci:".$karma[0]." 'ın tuttugu takım ".$takimlar[0]." 'dır.");
/* çift tırnak kullanınmı \" bu şekilde kullanılır */
$plakalar= array (35,34,51,06);
$sehirler =array("İzmir","İstanbul","Nigde","Ankara",);
echo $plakalar[0].":".$sehirler[0]."<br>";
echo $plakalar[1].":".$sehirler[1]."<br>";
echo $plakalar[2].":".$sehirler[2]."<br>";
echo $plakalar[3].":".$sehirler[3]."<br>";

$plakaBilgileri =array(
    "35"=>"İzmir",
    "34"=>"İstanbul",
    "51"=>"Nigde",
    "06"=>"Ankara");
echo $plakaBilgileri["35"]."<br>";    
echo $plakaBilgileri["34"]."<br>"; 
echo $plakaBilgileri["51"]."<br>"; 
echo $plakaBilgileri["06"]."<br>"; 

/*buna benzer telefon rehberi oluşturma
$telNu =array(5050367622,5050367624,5050367635,5050367651);
$kisi= array("esma","zeynep","seher","nil");
echo $kisi[0]. "=".$telNu[0]."<br>";
echo $kisi[1]. "=".$telNu[1]."<br>";
echo $kisi[2]. "=".$telNu[2]."<br>";
echo $kisi[3]. "=".$telNu[3]."<br>";*/

$rehber=array(
    "esma"=>"5050367622",
"zeynep"=>"5050367624",
"seher"=>"5050367635",
"nil"=>"5050367651");
echo $rehber["esma"]."<br>";


$ogrenciA =array("Esma OZKUL",array(35,51,45, array("erik", "armut","kiraz")),"deneme");
echo $ogrenciA[0]."<br>";
echo $ogrenciA[1][0]."<br>";
echo $ogrenciA[1][1]."<br>";
echo $ogrenciA[1][2]."<br>";
echo $ogrenciA[1][3][2]."<br>";
echo $ogrenciA[2]."<br>";
/* not ortalaması  ogra 0.indeks ogrenci adı 1.indeks notu  ogrb*/
$ogr1=array("esma",array(95,80,90));
$ogr2=array("zeynep",array(75,60,50));

$ogr1Ort=($ogr1[1][0]+$ogr1[1][1]+$ogr1[1][2])/3;
$ogr2Ort=($ogr1[1][0]+$ogr1[1][1]+$ogr1[1][2])/3;
echo $ogr1[0]." not ort = ".$ogr1Ort."<br>";
echo $ogr2[0]." not ort = ".$ogr2Ort."<br>";
echo $ogr1[0]." not ort = ".(($ogr1[1][0]+$ogr1[1][0]+$ogr2[1][1]+$ogr1[1][2])/3)."<br>";



// Sınıf dizisi
$sinif = array(
     "89547135"=>array(
         "ad" =>"Esma",
         "soyad"=>"ozkul",
         "notlar" => array(
            "mat"=>array(45,85,95),
            "fizik"=>array(75,80,94),
            "ing"=>array(80,85,95),
         )
         ),
         "139"=>array(
         "ad" =>"zeynep",
         "soyad"=>"eke",
         "notlar" => array(
            "mat"=>array(75,80,94),
            "fizik"=>array(75,85,95),
            "ing"=>array(45,85,95),
         )
         )



         );
echo $sinif["89547135"]["ad"]."<br>";
echo $sinif["139"]["soyad"]."<br>";
$ortalama=($sinif["89547135"]["notlar"]["mat"][0]+
           $sinif["89547135"]["notlar"]["mat"][1]+
           $sinif["89547135"]["notlar"]["mat"][2])/3;
echo $ortalama;
?>
