<?php
session_start();

if(!isset ($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil di tambahkan / tdk
    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert ('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>  
    ";
    } else {
        echo "
     <script>
    alert ('data gagal ditambahkan!');
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
    <title>Tambah Data Pemain</title>
    <link rel="stylesheet" href="css/tambah.css">
    
</head>
<body>
    <div class="tambah-page">
        <div class="form">
            <p>TAMBAH DATA</p>
            <form method="post" action="" enctype="multipart/form-data">

            <input for="Nama" type="text" name="Nama" id="Nama" placeholder="Nama" required />

            <input for="Nick" type="text" name="Nick" id="Nick" placeholder="Nick in game" required />

            <input for="Role" type="text" name="Role" id="Role" placeholder="Role" required/>

            <input for="Posisi" type="text" name="Posisi" id="Posisi" placeholder="Posisi" required/>

            <input for="Gambar" type="file" name="Gambar" id="Gambar"/>

            <button type="submit" name="submit">Tambah Data</button>

            </form>
        </div>
    </div>
</body>

</html>