<?php 

require '..//functions.php';
$keyword = $_GET ["keyword"];
$query = "SELECT * FROM TimTour 
                WHERE
            Nama   LIKE '%$keyword%' OR 
            Nick   LIKE '%$keyword%' OR
            Role   LIKE '%$keyword%' OR
            Posisi LIKE '%$keyword%'
            ";
$TimTour = query($query);

?>

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