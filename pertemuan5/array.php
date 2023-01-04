<?php 
// Array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key nya adalah index,yang mulai dari 0

// membuat array
// cara lama
$hari = array ("senin","selasa","rabu");
// cara baru
$bulan = ["januari","februari","maret"];
$arr1 =[123,"glen",false];

// menampilkan array
// var_dump ()  /   print_r()
// var_dump ($hari);
// echo "<br>";

// print_r($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array
// echo $arr1 [1];
// echo "<br>";

// echo $bulan [2];
// echo "<br>";

// echo $hari [0];


// menambahkan elemen baru pada array
var_dump($hari);
$hari [] = "kamis";
echo "<br>";
var_dump($hari);




?>