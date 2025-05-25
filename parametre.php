<?php
/*
function selam($isim="Misafir",$mesaj ="Günaydın"){ 
//boş oldugunda yukarda verilen değerleri yazar.

    echo $isim." " .$mesaj;

}
$sonuc = selam("ayse","nasılsın" )."<br>";

echo $sonuc;

function usAl($taban,$us=2){
   return  $taban**$us;
}
 
echo usAl(5,5)."<br>";

function toplama($a,$b,$c=0){
    return $a+$b+$c;
}
echo toplama(10,35);
*/
/*
function toplama(...$sayilar){
     $toplam=0;
     foreach ($sayilar as $sayi) {
       $toplam += $sayi;
     }
     return $toplam;
};
echo toplama(10,20,30,40,50,60,70,35,45,95,85,75,55);
*/
//dışarda tanımladığın değişkenler global değişkenlerdir.
/*
$x =22;
echo $x;

function deneme(){
    global $x;
    echo $x;
        echo "<br>";
    $GLOBALS['a']=33;

}
deneme();
echo $a;
*/

/*
function topla($sayi){
    $sayi += 24;
    echo $sayi."<br>";
}
$a=15;
topla(15);
echo $a;
*/
/*
function yasHesapla(&$tarihler){ //& dizinin içeriğini değiştiriyor.
    for ($i=0; $i < count($tarihler) ; $i++) { 
        $tarihler[$i] =date("Y") - $tarihler[$i];
    }
    return $tarihler;
}

$liste = array(2000,2003,1995,2002,1989);
//echo yasHesapla($liste);
echo "<pre>";
print_r(yasHesapla($liste));
print_r($liste);
echo "<pre>";
*/
/*
function test(){
    $parametreSayisi =func_num_args();
    if ($parametreSayisi == 0) {
        echo "parametre yok";
    }else{
        $gelenParametre = func_get_arg();
        foreach ($gelenParametre as $parametre) {
        echo $parametre. "<br>";
    }
}
}
test();
test(22,"esma",45.65);
*/

declare(strict_types=1);
function topla(int $a ,int $b ): float{
    return $a+$b;
}
echo topla(10,30);



?>