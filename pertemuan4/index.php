<?php 
// Date,Menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y ");


// Time
// UNIX Timestamp / EPOCH time
// Detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date ("l d M Y",time()+60*60*24*365);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal,tahun
// echo date("l", mktime(0,0,0,4,8,2004));
// // One day
// echo date("l", mktime(0,0,0,2,25,2020));

// strtotime
echo date("l", strtotime("8 thursday 2004"));



?>


