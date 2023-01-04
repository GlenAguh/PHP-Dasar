<?php  
// cek apakah tidak ada data di $_GET

if (!isset($_GET["nama"])||
    !isset($_GET["nick"])||
    !isset($_GET["role"])||
    !isset($_GET["posisi"])||
    !isset($_GET["gambar"]) ){
        // redirect
        header("Location : index.php");
        exit;
    }  



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemain</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nick"];?></li>
        <li><?= $_GET["role"];?></li>
        <li><?= $_GET["posisi"];?></li>
    </ul>
    <a href="index.php">Back</a>
    
</body>
</html>