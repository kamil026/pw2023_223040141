<?php 

$mahasiswa = [
    [ //1.
        "nama" => "Muhammad Kholish Kamil",
        "nrp" => "223040141",
        "email" => "kholis.223040141@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [//2.
        "nama" => "Miftahul Huda",
        "nrp" => "223040145",
        "email" => "miftahul.223040145@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//3.
        "nama" => "Ryan hidayat",
        "nrp" => "223040173",
        "email" => "ryan.223040173@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//4.
        "nama" => "Ilman hanifa",
        "nrp" => "223040165",
        "email" => "ilman.223040165@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//5.
        "nama" => "Genta sena irasta",
        "nrp" => "223040168",
        "email" => "genta.223040168@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//6
        "nama" => "Miftahul Huda",
        "nrp" => "223040145",
        "email" => "miftahul.223040145@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//7
        "nama" => "Muhammad rinaldi agus pratama",
        "nrp" => "223040166",
        "email" => "rinaldi.223040166@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//8
        "nama" => "Muhammad rizky maulana",
        "nrp" => "223040167",
        "email" => "rizky.223040167@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//9
        "nama" => "Hilmi anugrah bela negara",
        "nrp" => "223040175",
        "email" => "hilmi.223040175@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
        [//10
        "nama" => "Herdy sya'banul hakim",
        "nrp" => "223040164",
        "email" => "herdy.223040164@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?=$mhs["nrp"]; ?></li>
            <li>Email : <?=$mhs["email"]; ?></li>
            <li>Jurusan : <?=$mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>