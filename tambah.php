<?php
// koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "mahasiswa_db";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// jika form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil data dari input field
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];

    // masukkan data ke dalam tabel "mahasiswa"
    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat, email) VALUES ('$nim', '$nama', '$jurusan', '$alamat','$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form method="POST" action="tambah.php">
        <label>NIM:</label>
        <input type="text" name="nim"><br><br>

        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan"><br><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <label>Email:</label>
        <textarea name="email"></textarea><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>
</html>
