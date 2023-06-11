<?php 
$mahasiswa =
[
['nama'=>'kholish','makanan'=>'🍟','binatang'=>'🐼' ],
['nama'=>'sena','makanan'=>'🍔','binatang'=>'🙈'],
['nama'=>'ryan','makanan'=>'🍕','binatang'=>'🐸'],
['nama'=>'ilman','makanan'=>'🌭','binatang'=>'🦖'],
['nama'=>'genta','makanan'=>'🍿','binatang'=>'🐬']
];


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs){ ?>
        <ul>
            <li>nama: <?= $mhs['nama'];?></li>
            <li>makanan favorit: <?= $mhs['makanan']; ?></li>
            <li>peliharaan: <?=$mhs['binatang']; ?></li>
        </ul>
    <?php }?>
</body>
</html>