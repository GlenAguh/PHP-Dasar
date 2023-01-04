


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glen nc</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            
            line-height: 30px;
            margin-right: 10px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .bulat {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 20px;
            float: left;
            transition: 1s;
        }
        .bulat:hover {
            transform: rotate(360deg);
            width: 30px;
            border-radius: 0%;
            
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [1,2,3,4,5,6,7,8,9];
$angka1 = [["glen","al","feb",],["kev","hil","igo"]];
?>

<?php foreach ($angka as $a) :?>

<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

<br><br>


<?php foreach ($angka1 as $x) :?>
    <?php foreach($x as $y): ?>

<div class="bulat"><?= $y; ?></div>
<?php endforeach; ?>
<div class=""></div>
    <?php endforeach; ?>
</body>
</html>
