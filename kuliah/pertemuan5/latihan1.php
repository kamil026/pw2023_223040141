<?php
//ARRAY
// Meembuat array
$hari = arrray('senin', 'selasa', 'rabu');
$bulan = ['jabuary', 'february', 'maret'];
$myArrey = ['sandhika', 39, false];
$binatang = ['🐼', '🙈', '🐸'] 

// Mencetak arrey
// mencetak 1elemen array menggunakan echo

echo $binatang[3];
echo '<br>';

// Mencetak seluruh tsl menggunakan array
// var_dump 
echo '<br>';
print_r($bulan);
echo '<br>';
var_dump($myArray);
echo '<br>';
print_r($binatang); 

// manipulasi array 








// menambahkan elemen di akhir dengan mengosongkan indexsnya
$hari [] = "jum'at";
$hari [] = "sabtu";
print_r($hari);


// Menambahkan elemnent diakhir menggunakan arrey push 
array_push($bulan, 'april' );
print_r($nulan);


?>

