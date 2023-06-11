<?php
require('functions.php');

$title = 'form tambah data';

// insert data ketika tombol tambah diklik
if(isset($_POST['tambah'])) {
    if (tambah($_POST)) {
    echo "<script>
        alert ('data berhasil ditambahkan');
        document.locatin.href = 'index.php';
        </script>";
    }
}

require('views/tambah.view.php');