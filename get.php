<?php

if ($_GET) {
  $programlama = $_GET['dil'];

if($programlama == "php"){
    echo "sad";
}else{
    echo "yazık ettiniz";
}

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="getSonuc.php?dil=asp"> Bana Tıkla</a>
<!--action="getSonuc.php" bu kısım diğer sayfalara geçişi sağlar
 form ksıımın içerisine yazarsam-->
    <form  method="get"> 
        <input type="text" name="dil">
        <button type="submit">gönder</button>
</body>
</html>