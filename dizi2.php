<?php

$notlar =array(10,20,30,40);
$plakaSistem=array("51"=>"Nigde","16"=>"bursa","35"=>"İZMİR");
echo count($notlar)."<br>";

for($i=0; $i <count($notlar); $i++){
    echo $notlar[$i]."<br>";
}

//echo notlar
print_r($notlar);
echo "<br>";
print_r($plakaSistem);
echo "<br>";

/*dizinin sonuna ekleme işlemi*/
array_push($notlar,55);
print_r($notlar);
echo "<br>";
$notlar[]=130;
print_r($notlar);
echo "<br>";

/*dizinin başına ekleme işlemi*/
array_unshift($notlar,33);
print_r($notlar);
echo "<br>";

/*dizinin sondan eleman çıkarma işlemi*/
array_pop($notlar);
print_r($notlar);
echo "<br>";


/*dizinin baştan eleman çıkarma işlemi*/
array_shift($notlar);
print_r($notlar);
echo "<br>";


/*dizide artan ya da azlan işlemleri*/
sort($notlar);
print_r($notlar);
echo "<br>";

/*dizide azalan ya da artan işlemleri*/
rsort($notlar);
print_r($notlar);
echo "<br>";

$plakaSistem=array("51"=>"Nigde","16"=>"bursa","35"=>"İZMİR");
print_r($plakaSistem);
echo "<br>";
asort($plakaSistem);
print_r($plakaSistem);
echo "<br>";
ksort($plakaSistem);
print_r($plakaSistem);
echo "<br>";

arsort($plakaSistem);
print_r($plakaSistem);
echo "<br>";
krsort($plakaSistem);
print_r($plakaSistem);
echo "<br>";

print_r(array_flip($plakaSistem));
echo "<br>";
$notlar=array(10,20,30,15,20,20,10);
print_r($notlar);
echo "<br>";

print_r(array_count_values($notlar));
echo "<br>";


$takimlar = array("galatasaray","besiktas","arsenal","trabzon");
$secilenTakim = array_rand($takimlar);
echo $takimlar  [$secilenTakim];
echo "<br>";

$secilenTakimlar =array_rand($takimlar ,3);
print_r($secilenTakimlar);
echo "<br>";

echo $takimlar[$secilenTakimlar[0]]."<br>";
echo $takimlar[$secilenTakimlar[1]]."<br>";
echo $takimlar[$secilenTakimlar[2]]."<br>";

$herhangibirDegisken="25 35 45 65";
$yeniDizi=explode(" " ,$herhangibirDegisken);
print_r($yeniDizi);
echo "<br>";
$sonHali= implode(",",$yeniDizi);
echo $sonHali;


?>