<?php
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Nama</th>
      <th>NPM</th>
      <th>Kelas</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['npm']; ?></td>
      <td><?= $m['kelas']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
        <a href="latihan3.php">|Kembali ke daftar mahasiswa</a>
      </td>
    </tr>

</body>

</html>