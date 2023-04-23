<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_a22100023');
}

function execute_query($query) 
  // Implementasi fungsi untuk menjalankan query di sini
{

  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $umur = htmlspecialchars($data['umur']);
  $ig = htmlspecialchars($data['ig']);
  $followers = htmlspecialchars($data['followers']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              cosplayer
            VALUES
            (null, '$nama', '$umur', '$ig', '$followers', '$gambar');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}