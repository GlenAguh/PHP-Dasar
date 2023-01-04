<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$player = [
     [
    "nama" => "Glennn",
    "nick" => "Casiss",
    "role" => "GoldLane",
    "posisi" => "Pemain",
    "gambar" => "betrik.jpg"
     ],
     [
        "nama" => "Febrio",
        "nick" => "Foxy!",
        "role" => "Midlane",
        "posisi" => "Pemain",
        "gambar" => "yve.jpg"
     ],
     [
        "nama" => "Chergio",
        "nick" => "IgoxxMdo",
        "role" => "ExpLine",
        "posisi" => "Pemain",
        "gambar" => "esme.jpg"
     ],
     [
        "nama" => "Kevinn",
        "nick" => "Vinn",
        "role" => "Jungler",
        "posisi" => "Pemain",
        "gambar" => "ling.jpg"
     ],
     [
        "nama" => "Azrial",
        "nick" => "Cyy.",
        "role" => "Roamer",
        "posisi" => "Pemain",
        "gambar" => "atlas.jpg"
     ],
     [
        "nama" => "Hilmi",
        "nick" => "NONENG AHHOOHOOY",
        "role" => "Exp / Gold",
        "posisi" => "Cadangan",
        "gambar" => "ruby.jpg"
     ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PucukkHarumm</title>
    <style>

      h1 {
         text-align: center;
      }
      .gambar{
         margin-right: 40px;
         float: left;
        
      }
    </style>
</head>
<body>
    <h1>Pucuk Pokee</h1>
    <?php foreach ($player as $list) :?>
        <ul class="gambar">
            <li>
               <img src="img/<?= $list["gambar"];?>"> 
            </li>
            <li>Nama : <?= $list["nama"] ?>;</li>
             <li>nick : <?= $list["nick"];?></li>
             <li>Role : <?= $list["role"];?></li>
             <li>Posisi : <?= $list["posisi"];?></li>
        </ul>
     <?php endforeach;?>   
</body>
</html>