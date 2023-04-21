<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pabw_a22100057');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $rows;
  }

  return $rows;
}
