<?php 
$mahasiswa =
[['kholish','🍟','🐼' ],
['sena','🍔','🙈'],
['ryan','🍕','🐸'],
['ilman','🌭','🦖'],
['genta','🍿','🐬']];


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
            <li>nama: <?= $mhs[0];?></li>
            <li>makanan favorit: <?= $mhs[1]; ?></li>
            <li>peliharaan: <?=$mhs[2]; ?></li>
        </ul>
    <?php }?>
</body>
</html>