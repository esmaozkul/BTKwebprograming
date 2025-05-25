<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Girisi</title>
</head>
<body>
    <h2>Kullanıcı Girisi</h2>
    <?php
    if(isset($_GET['msg'])){
        echo "<p style='color:blue'>".htmlspecialchars($_GET['msg']). "</p>";
    }
    ?>
    <form action="login_process.php" method="POST">
        <label for="email">Eposta :</label>
        <input type="email" name="email" require><br><br>
<form action="login_process.php" method="POST">
        <label for="password">password :</label>
        <input type="password" name="password" require><br><br>
        

        <button type="submit">Giriş yap</button>
</body>
</html>