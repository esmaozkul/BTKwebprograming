<?php
const host="localhost";
const username="root";
const password="";
const database="veritabani";

$baglanti= mysqli_connect(host, username, password ,database);

if (mysqli_connect_errno()>0) {
    die("hata".mysqli_connect_errno());
}
echo "veri tabani baglantisi kuruldu";


mysqli_close($baglanti);
?>
