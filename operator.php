<?php 

$sayi=10;
$sayi2=4;

$sayi = $sayi += $sayi2;
echo $sayi;
echo "<br>";

$sayi = $sayi -= $sayi2;
echo $sayi;
echo "<br>";
$sayi = $sayi *= $sayi2;
echo $sayi;
echo "<br>";

$sayi = $sayi /= $sayi2;
echo $sayi;
echo "<br>";

$sayi = $sayi %= $sayi2;
echo $sayi;
echo "<br>";

$sayi = $sayi **= $sayi2;
echo $sayi;
echo "<br>";
/*birleştirme ikisini yan yana yazdırma işlemi yapar */
$sayi = $sayi .= $sayi2;
echo $sayi;
echo "<br>";

$ad ="esma";
$soyad =" ozkul";
$ad .=$soyad;
echo $ad;
echo "<br>";

//karşılaştırma işlemleri
$sonuc =($sayi == $sayi2);
$sonuc =($sayi != $sayi2);
//türüne de bakar
$sonuc2 =($sayi === $sayi2);
$sonuc2 =($sayi !== $sayi2);
$sonuc2 =($sayi < $sayi2);
$sonuc2 =($sayi > $sayi2);
$sonuc2 =($sayi <= $sayi2);
$sonuc2 =($sayi >= $sayi2);
$sonuc5 =($sayi <=> $sayi2);
echo $sonuc ;
echo var_dump($sonuc);
echo "<br>";
echo $sonuc2 ;
echo var_dump($sonuc2);
echo "<br>";
echo $sonuc5 ;
echo var_dump($sonuc5);


//mantıksal operatorler || or && and
$sayi3 =10;
$sayi4=25;

$sonuc7 =($sayi3>15) and ($sayi4<30);
echo "<br>";
$sonuc7 =$sayi3>15 and $sayi4<30;
echo "<br>";
$sonuc7 =($sayi3>15) || ($sayi4<30);
echo "<br>";
$sonuc7 =($sayi3>15 or $sayi4<30);
echo "<br>";
 echo var_dump($sonuc7);


// mod alma
echo $sayi % $sayi2;
echo "<br>";
//üst alma
echo $sayi ** $sayi2;
echo "<br>";
//küp alma
echo 2**3;
echo "<br>";
echo $sayi++;
echo "<br>";
echo $sayi;
echo "<br>";
echo ++$sayi;
echo "<br>";
echo $sayi--;
echo "<br>";
echo $sayi;
echo "<br>";
echo --$sayi;
echo "<br>";









?>
