<?php
// Fungsi untuk melakukan koneksi ke database
function connectDB() {
    $host = "localhost"; // ganti sesuai host Anda
    $user = "root"; // ganti sesuai user Anda
    $pass = ""; // ganti sesuai password Anda
    $db = "db_pelanggan"; // ganti sesuai database Anda

    // membuat koneksi ke database
    $conn = mysqli_connect($host, $user, $pass, $db);

    // cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $conn;
}

// Fungsi untuk menutup koneksi ke database
function closeDB($conn) {
    mysqli_close($conn);
}

// Fungsi untuk menyimpan data pelanggan ke database
function insertPelanggan($nama, $email, $alamat) {
    $conn = connectDB();

    $sql = "INSERT INTO pelanggan (nama, email, alamat)
            VALUES ('$nama', '$email', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "Data pelanggan berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    closeDB($conn);
}

// Fungsi untuk mengambil data pelanggan dari database
function getPelanggan() {
    $conn = connectDB();

    $sql = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . " - Alamat: " . $row["alamat"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    closeDB($conn);
}
?>
