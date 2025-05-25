<?php
$ad ="esma";
$soyad = "ozkul";
$yas =22;

$mesaj = "merhaba benim adim" .$ad." " .$soyad. "ve ben".$yas."yasindayim"; 
$mesaj1 = "merhaba benim adım {$ad} {$soyad} ve ben {$yas} yasındayım";
$mesaj2 = "merhaba benim adım $ad $soyad ve ben $yas yasındayım";
$deneme= "merhabaalar esma";
$deneme2= "MERHABA";




echo $mesaj. "<br>";
echo $mesaj1. "<br>";
echo $mesaj2. "<br>";
echo $mesaj[0]. "<br>";
echo $mesaj[5]. "<br>";
echo strlen($mesaj)."<br>";
echo str_word_count($mesaj)."<br>";
echo str_word_count($deneme)."<br>";
echo strtoupper($mesaj)."<br>";
echo strtolower($deneme2)."<br>";
echo ucfirst($mesaj)."<br>";
echo ucwords($mesaj)."<br>";
echo str_replace("esma","zeynep",$mesaj)."<br>";
echo str_replace(["esma","22"],["zeynep","23"],$mesaj). "<br>";






?>