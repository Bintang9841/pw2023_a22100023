<?php
require 'functions.php';

$id = $_GET['Id'];
$c = execute_query("SELECT * FROM cosplayer WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Cosplayer</title>
</head>

<body>
  <h3>Detail Cosplayer</h3>
  <ul>
  <li><img src="img/<?= $c['gambar']; ?>" width="150" height="150"></li>
    <li>Id : <?= $c['id']; ?></li>
    <li>Umur : <?= $c['umur']; ?></li>
    <li>Ig : <?= $c['ig']; ?></li>
    <li>Followers : <?= $c['followers']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar cosplayer</a></li>
  </ul>
</body>

</html>
