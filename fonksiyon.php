<?php
/* echo date("d/m/Y")."<br>"; gün ay yıl fonksiyonu */
/*
function selam(){
    echo "merhaba esma"."<br>";
}
selam();

for ($i=0; $i < 10; $i++) { 
    echo ($i+1)." ".selam()."<br>";
}
*/
/*
function toplama(){
    $a =10;
    $b =30;
    $toplam = $a+$b;
    echo $toplam;
}
echo toplama()."<br>";

function carpan(){
    return 3;
}
echo (toplama()*carpan());
*/
/*
function sene(){
    return date("Y");
}
function yasHesapla(){
    return sene()-2003;
}
echo yasHesapla();
*/
/*
function saat(){
  return date("H");

}
 function karsilastirma() {
    if (saat()<12){
        return "günoo";
    }else{
        return "iyi günler";
    }
 }
echo karsilastirma();

*/
/*
function selam($isim){
    return "merhaba ".$isim."<br>";
}
echo selam("esma");
echo selam("zeynep");

function toplama($sayi1, $sayi2){
    return $sayi1+$sayi2;
}
echo toplama(30,40)."<br>";

function sene(){
    return date("Y");
}
    */
function yasHesapla($Dsene){
    return date("Y")-$Dsene;
}
//echo yasHesapla(2003);
/*
function yaslandinmiKardes($Dsene, $isim){
    if (yasHesapla($Dsene)<70) {
        return $isim." henuz yaslanmadın ".(70-yasHesapla($Dsene))." yılın var";
    }else{
        return $isim."kardeş sen yaşlanmıssın yaaa".(yasHesapla($Dsene)-70)."yılın geçmiş";
    }
};
echo yaslandinmiKardes(2003,"Esma")
*/
/*
function yazdir($kelime,$adet){
    for ($i=0; $i < $adet; $i++) { 
        echo $i." ".$kelime."<br>";
    }
}
yazdir("bilgisayar",10);

function hesapla($k,$u){
    $alan = $k*$u; 
    $cevre = ($k+$u)*2;
    echo "cevre : ".$cevre."<br> Alan : ".$alan;
}
  hesapla(3,5);
*/

function adiniSenKoy($sayi1){
    $tambolenler= array();
    for ($i=1; $i <=$sayi1 ; $i++) { 
        if ($sayi1% $i ==0) {
            array_push($tambolenler , $i);
        }
    }
    return $tambolenler ;

}
print_r(adiniSenKoy(36));

?>