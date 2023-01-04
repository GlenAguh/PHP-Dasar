<?php
require 'functions.php';

// ambil data dari url
$id = $_GET["Id"];

// query data pemain berdasarkan id
$TimTour = query("SELECT * FROM TimTour WHERE Id = $id") [0];
 

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil di ubah / tdk
    if (ubah ($_POST) > 0) {
        echo "
    <script>
    alert ('data berhasil diubah!');
    document.location.href = 'index.php';
    </script>  
    ";
    } else {
        echo "
     <script>
    alert ('data gagal diubah!');
    document.location.href = 'index.php';
    </script>
    ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pemain</title>
    <style>
        h1 {
            font: normal 13px/100% Verdana, Tahoma, sans-serif;
        }
        body{
            background-color: #C9C9C9;
            text-align: center;
            align-items: center;
            width: 400px;
            height: 400px;
            border: 1px solid black;
            
        }
        
            
        
        input {
            padding: 9px;
            border: solid 1px #E5E5E5;
           
            outline: 0;
            font: normal 13px/100% Verdana, Tahoma, sans-serif;
            width: 200px;
            background: #FFFFFF url('bg_form.png') left top repeat-x;
            background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));
            background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
            -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
        }

        input:hover,
        textarea:hover,
        input:focus,
        textarea:focus {
            border-color: #C9C9C9;
            -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;
        }

        .form label {
            margin-left: 10px;
            color: black;
            
        }

        .submit button {
            width: auto;
            padding: 9px 15px;
            background: #617798;
            border:0;
            font-size: 14px;
            color: #FFFFFF;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            transition: .5s;
        }
        .submit:hover button{
            background-color: black;
            color: white;
            
        }
    </style>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="Id" value="<?= $TimTour ["Id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $TimTour ["Gambar"]; ?>">
        
            <p class="name">
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" required 
                value ="<?= $TimTour  ["Nama"]; ?>">
            </p>
            <p class="nick"> <label for="Nick">Nick :</label>
                <input type="text" name="Nick" id="Nick" required
                value ="<?= $TimTour  ["Nick"]; ?>">
            </p>
            <p class="role">
                <label for="Role">Role :</label>
                <input type="text" name="Role" id="Role" required
                value ="<?= $TimTour  ["Role"]; ?>">
            </p>
            <p class="posisi">
                <label for="Posisi">Posisi :</label>
                <input type="text" name="Posisi" id="Posisi" required
                value ="<?= $TimTour  ["Posisi"]; ?>">
         </p>
            <p class="gambar">
                <label for="Gambar"> Gambar :</label>
                <img src="img/<?= $TimTour['Gambar'];?>" width="40"> <br>
                <input type="file" name="Gambar" id="Gambar">
        </p>
            <p class="submit">
                <button type="submit" name="submit">Ubah Data!</button>
    </p>
        
    </form>

</body>

</html>
hyuei9fg