<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];

// Menjalankan query untuk melakukan operasi insert
$sql = "INSERT INTO nama_tabel (nama, email) VALUES ('$nama', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
<form method="post" action="simpan.php">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <input type="submit" value="Simpan">
</form>
