<?php 
// Pertemuan 2
// Sintaks php

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// Variabel dan Tipe Data
// Variabel
// $nama = "Glenn";
// $nama1 = "No Counter"


// Operator
// Aritmatika
// + - * / % 
// $x = 10;
// $y = 20;
// echo $y * $x;


// Penggabung string / concatenation / concat
// .
// $nama_depan = "Glenn";
// $nama_belakang = "Aguh";
// echo $nama_depan ." " . $nama_belakang;


// Assigment
// = , += , -= , *= , /= , %= , .=
// $x = 6;
// $x *= 10;
// echo $x;
// $nama = "Glenn";
// $nama .= " ";
// $nama .= "Aguh";
// echo $nama;


// Perbandingan 
// <, > , <= ,>= , == , !=
// var_dump (7 > 9);


// Identitas
// var_dump (1 === "1");


// Logika
// && , || , !
$x = 30;
var_dump ($x < 20  || $x % 2 == 0);

?>
    


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glenn</title>
</head>
<body>

    <h1>Hallo, Selamat datang  <?php echo "$nama"; ?></h1>
    <p> <?php  echo "I am back";?></p>

    <?php 
    
        echo "<h1> $nama1 </h1>";
    
    ?>
    
</body>
</html> -->