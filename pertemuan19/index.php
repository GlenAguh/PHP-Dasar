<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php';
$TimTour = query("SELECT * FROM TimTour");

// tombol cari di tekan 
if (isset($_POST["cari"])) {
    $TimTour = cari($_POST["keyword"]);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glenn</title>
     <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <h1>List Pemain</h1>

    <form action="" method="post" align="center">

        <input type="text" name="keyword" autofocus placeholder="Pencarian..." autocomplete="off" id="keyword">

        <button type="submit" name="cari" id="tombol-cari"> Cari! </button>
    </form>

    <br>

    <div id="container">
        <table align="center">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Nick</th>
                <th>Role</th>
                <th>posisi</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($TimTour as $row) : ?>


                <tr>
                    <td> <?= $i; ?></td>
                    <td>
                        <a href="ubah.php?Id=<?= $row["Id"]; ?>">Ubah</a> |
                        <a href="hapus.php?Id=<?= $row["Id"]; ?>" onclick="return confirm ('Yakin?')">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["Gambar"]; ?>" width="50px"> </td>
                    <td><?= $row["Nama"]; ?></td>
                    <td><?= $row["Nick"]; ?></td>
                    <td><?= $row["Role"]; ?></td>
                    <td><?= $row["Posisi"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>


        </table>
    </div>
    <center>
        <a class="link" href="tambah.php">Tambah Data Pemain</a>
        <a href="logout.php" class="link">LogOut</a>
    </center>

    
    <script src="js/script.js"></script>

</body>

</html>