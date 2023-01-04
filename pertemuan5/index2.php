<?php
$player = [
    ["Glenn", "Casiss", "GoldLane","pemain"],
    ["Febrio", "Foxy!", "Midlaner","pemain"],
    ["Chergio", "IgoxxMdo", "Roamer","pemain"],
    ["Kevin", "Vinn", "Jungler","pemain"],
    ["Hilmi", "NONENG AHOOHHOOY", "ExpLine","pemain"],
    ["Azial", "Cyy.", "Roamer","Pemain Cadangan"]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PucukHarum</title>
</head>
<body>
    <h1>Daftar Nama Player</h1>

    <?php foreach($player as $main):  ?>
        <ul>
            <li>Nama          : <?= $main [0];  ?></li>
            <li>Nick in game  : <?= $main [1];   ?> </li>
            <li>Role          : <?= $main [2];   ?> </li>
            <li>Posisi        : <?= $main [3];   ?> </li>
        </ul>


    <?php  endforeach;?>

</body>
</html>