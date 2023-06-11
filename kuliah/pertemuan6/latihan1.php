<?php
 $nama = ['kholish','sena','ryan','ilman','genta'];
 $makanan = ['🍟', '🍔', '🍕', '🌭', '🍿'];
 $binatang = ['🐼', '🙈', '🐸','🦖','🐬'] ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <ul>
        <?php foreach($mahasiswa as $i) {?>
        <ul>  
        
        <li>nama: <?= $nama[$i];?> </li>
        <li>makanan favorit:<?= $makanan[$i];?></li>
        <li>Peliharaan:<?= $binatang[$i];?></li>

    </ul>
    
    
    
</body>
</html>