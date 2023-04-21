<?php
require 'functions.php';

//cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'latihan3.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal ditambahkan!');
    document.location.href = 'latihan3.php';
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NPM :
          <input type="text" name="npm" required>
        </label>
      </li>
      <li>
        <label>
          Kelas :
          <input type="text" name="kelas" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>

    </ul>
  </form>
</body>

</html>