<?php

function execute_query($query) { // tambahkan kurung kurawal awal di sini
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
function koneksi() {
  return mysqli_connect('localhost', 'root', '', 'pw_a22100023');
}


function tambah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nama = htmlspecialchars($data['nama']);
  $umur = htmlspecialchars($data['umur']);
  $ig = htmlspecialchars($data['ig']);
  $followers = htmlspecialchars($data['followers']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO cosplayer (id, nama, umur, ig, followers, gambar) 
            VALUES ('$id', '$nama', '$umur', '$ig', '$followers', '$gambar')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
