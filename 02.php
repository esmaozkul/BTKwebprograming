<?php
$dersAdi="PHp programlama"; 
$icerik="Php ile web sitesi tasarımı"; 
$dersGun= "cumartesi pazar"; 
$dersSaati ="16:00-23:00" ; 
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    adı : <?php  echo  $dersAdi  ?><br>
    İçerik: <?php  echo $icerik  ?><br>
    Günler: <?php echo  $dersGun ?><br>
    saat: <?php  echo $dersSaati ?><br>
    <hr>
    adı : <?php  echo  $dersAdi  ?><br>
    İçerik: <?php  echo $icerik  ?><br>
    Günler: <?php echo  $dersGun ?><br>
    saat: <?php  echo $dersSaati ?><br>
    <hr>

    <?php
      echo "<strong>adı:</strong> " .$dersAdi. "<br> <strong>içerik:</strong> " 
      .$icerik. "<br> <strong>ders gün :</strong>" 
      .$dersGun. "<br> <strong>ders saat :</strong> " .$dersSaati  ;
?>



</body>
</html>