<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_a22100023');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM cosplayer");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel 
$cosplayer = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Cosplayer</title>
</head>

<body>
  <h3>Daftar Cosplayer</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Id</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Ig</th>
      <th>Followers</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($cosplayer as $c) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $c['gambar']; ?>" width="60"></td>
        <td><?= $c['id']; ?></td>
        <td><?= $c['nama']; ?></td>
        <td><?= $c['umur']; ?></td>
        <td><?= $c['ig']; ?></td>
        <td><?= $c['followers']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>