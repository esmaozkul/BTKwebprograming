<?php
/*for döngüsü
for ($i=0; $i<25; $i+=3){
    echo $i."<br>";
}

for($j=20; $j<50; $j++){
    if($j%3 ==0){
         echo $j."<br>";
    }
}
*/
//while döngüsü
$a=0;
while($a <=10){
    echo $a."<br>";
    $a++;
}

echo "<br>";
$a=0;
while($a <=10){
    $a++;
    echo $a."<br>";
    
}

echo "<br>";
// 1 den 10 a kadar olan sayılar toplamı
$sayi = 1;
$toplam = 0;
while ($sayi <= 10) {
    $toplam += $sayi;
    $sayi++;
}
echo $toplam;

echo "<br>";

$sayi3 = 20;
$toplam2 = 0;

while ($sayi3 <= 50) {
    if ($sayi3 % 3 == 0) {
        $toplam2 += $sayi3;
    }
    $sayi3++;
}
echo $toplam2;

echo "<br>";
?>