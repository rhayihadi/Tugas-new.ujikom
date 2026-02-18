<?php
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    // 1. Ambil data dari form
    $nama = $_POST['nama'];
    $nis = $_POST['nis']; // NIS digunakan sebagai Username
    $kelas = $_POST['kelas'];
    $raw_pass = $_POST['password'];

    // 2. Enkripsi Password
    // password_hash akan mengubah "12345" menjadi kode acak seperti "$2y$10$..."
    $password_aman = password_hash($raw_pass, PASSWORD_DEFAULT);

    // 3. Query Insert ke tabel user
    $query = "INSERT INTO user (nama, username, password, nis, kelas)
              VALUES ('$nama', '$nis', '$password_aman', '$nis', '$kelas')";

    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
        echo "<script>alert('Data siswa berhasil ditambahkan!'); window.location='form-siswa.php';</script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}
?>
