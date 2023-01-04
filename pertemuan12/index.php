<?php
require 'functions.php';
$TimTour = query("SELECT * FROM TimTour");

// tombol cari di tekan 
if ( isset($_POST["cari"]) ){
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
    <style>
        body{
            background-color: #2C3333;
        }
        h1 {
            color: #eaebec;
            text-shadow: 1px 2px 3px black;
            text-align: center;
            font-family: sans-serif;
            line-height: 50%;
        
        }
        .link {
            text-decoration: none;
            color: white;
            text-align: right;
            font-family: sans-serif;
            text-shadow: 1px 2px 3px black;
            font-weight: bold;
            border: 1px solid black;
            line-height: 50px;
            margin: auto;
            padding: 10px;
            border-radius: 5px;
            background-color: #666;
            transition: 1s;
            text-align: center;
            }
            .link:hover{
                background-color: #ffffff;
                color: black;
                text-shadow: 1px 2px 3px white;
            }

        table {
            
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 1px solid;
        }

        table th {
            padding: 15px 35px;
            border-left: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            background: #ededed;
        }

        table th:first-child {
            border-left: none;
        }

        table tr {
            text-align: center;
            padding-left: 20px;
        }

        table td:first-child {
            text-align: left;
            padding-left: 20px;
            border-left: 0;
        }

        table td {
            padding: 15px 35px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }

        table tr:last-child td {
            border-bottom: 0;
        }

        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        table tr:last-child td:last-child {
            -moz-border-radius-bottomright: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
        }
    </style>
</head>

<body>
    <h1>List Pemain</h1>

    <form action="" method="post" align ="center">
        <input type="text" name="keyword"  autofocus 
        placeholder="Pencarian..." autocomplete="off">
        <button type="submit" name="cari"> Cari! </button>
    </form>

    <br>
    
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
    <center>
    <a class="link" href="tambah.php">Tambah Data Pemain</a>
    </center>
</body>

</html>