<?php
// Variabel Scope / Lingkup Variabel
// $x = 10;
// function tampilX(){
//     global $x;
//     echo $x;
// }
// tampilX();



//  SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);

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
    <title>GET</title>
 </head>
 <body>
    <h1>List Pemain</h1>
    <ul>
        <?php foreach ($player as $list) :?>
        <li>
            <a href="index2.php?nama=<?=$list["nama"];?>
            &nick=<?= $list["nick"];?>
            &role=<?= $list["role"];?>
            &posisi=<?= $list["posisi"];?>
            &gambar=<?= $list["gambar"];?>
            "><?= $list["nama"];?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    
 </body>
 </html>