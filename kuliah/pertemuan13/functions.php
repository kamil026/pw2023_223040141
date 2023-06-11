<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040141_e/kuliah/pertemuan13/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040141') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data){
  $Conn = koneksi();
  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar =  $data['gambar'];

  $query = "INSERT INTO
              mahasiswa
             VALUES
             (null, '$nim', '$nama', '$email', 
             '$jurusan', '$gambar' )";
  mysqli_query($Conn, $query)or die (mysqli_error($Conn));
  
  return mysqli_affected_rows($Conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
