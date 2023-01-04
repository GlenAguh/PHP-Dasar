<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM TimTour");
 
// ambil data (fetch) dari object result
// mysqli_fetch_row() //   mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_arra  // mengembalikkan keduanya
// mysqli_fetch_object()

// while ($list = mysqli_fetch_assoc($result)){
//     var_dump($list);
// }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glenn</title>
</head>
<body>
    <h1>List Pemain</h1>
    <table border="1" cellpadding="10" cellspacing="0">
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
         <?php while ($row = mysqli_fetch_assoc($result)) :?>
        
            
        <tr>
        <td> <?= $i; ?></td>
            <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["Gambar"]; ?>" width="50px"> </td>
            <td><?= $row["Nama"];?></td> 
            <td><?= $row["Nick"]; ?></td>
            <td><?= $row["Role"]; ?></td>
            <td><?= $row["Posisi"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>
 