<?php
require 'functions.php';
$cosplayer = execute_query("SELECT * FROM cosplayer");

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

  <a href="tambah.php">Tambah Data Cosplayer</a>
<br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($cosplayer as $c) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $c['gambar']; ?>" width="60"></td>
        <td><?= $c['nama']; ?></td>
        <td>
          <a href="detail.php?Id=<?= $c['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>