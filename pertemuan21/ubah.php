<?php

session_start();

if(!isset ($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data dari url
$id = $_GET["Id"];

// query data pemain berdasarkan id
$TimTour = query("SELECT * FROM TimTour WHERE Id = $id") [0];
 

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil di ubah / tdk
    if (ubah ($_POST) > 0) {
        echo "
    <script>
    alert ('data berhasil diubah!');
    document.location.href = 'index.php';
    </script>  
    ";
    } else {
        echo "
     <script>
    alert ('data gagal diubah!');
    document.location.href = 'index.php';
    </script>
    ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pemain</title>
    <link rel="stylesheet" href="css/ubah.css">
</head>

<body>
        
<div class="ubah-page">
        <div class="form">
            <p>Ubah Data</p>
            <form method="post" action="" enctype="multipart/form-data">

            <input type="hidden" name="Id" value="<?= $TimTour ["Id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $TimTour ["Gambar"]; ?>">


            <input for="Nama" type="text" name="Nama" id="Nama" placeholder="Nama" required  value ="<?= $TimTour  ["Nama"]; ?>"/>

            <input for="Nick" type="text" name="Nick" id="Nick" placeholder="Nick in game" required value ="<?= $TimTour  ["Nick"]; ?>"/>

            <input for="Role" type="text" name="Role" id="Role" placeholder="Role" required value ="<?= $TimTour  ["Role"]; ?>"/>

            <input for="Posisi" type="text" name="Posisi" id="Posisi" placeholder="Posisi" required value ="<?= $TimTour  ["Posisi"]; ?>"/>

            
            <img src="img/<?= $TimTour['Gambar'];?>" width="40">
            <input for="Gambar" type="file" name="Gambar" id="Gambar"/>

            <button type="submit" name="submit">Tambah Data</button>

            </form>
        </div>
    </div>

</body>

</html>
