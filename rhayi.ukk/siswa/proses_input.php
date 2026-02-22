<?php
session_start();

include __DIR__ . '/../config/koneksi.php';
include __DIR__ . '/../config/auth.php';

// cek tombol submit
if (!isset($_POST['ganti'])) {
    die("Akses tidak valid");
}

// cek session login
if (!isset($_SESSION['id'])) {
    die("Session login tidak ditemukan");
}

$id = $_SESSION['id'];
$pass_lama = $_POST['password_lama'];
$pass_baru = $_POST['password_baru'];
$konfirmasi = $_POST['konfirmasi_password'];

// ambil password lama dari database
$query = mysqli_query($koneksi, "SELECT password FROM tb_user WHERE id='$id'");
if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);

// cek password lama
if (!password_verify($pass_lama, $data['password'])) {
    echo "<script>alert('Password lama salah');history.back();</script>";
    exit;
}

// cek konfirmasi password
if ($pass_baru !== $konfirmasi) {
    echo "<script>alert('Konfirmasi password tidak cocok');history.back();</script>";
    exit;
}

// hash password baru
$hash = password_hash($pass_baru, PASSWORD_DEFAULT);

// update password
$update = mysqli_query($koneksi, "UPDATE tb_user SET password='$hash' WHERE id='$id'");

if ($update) {
    echo "<script>alert('Password berhasil diganti!');location='../index.php';</script>";
} else {
    echo "<script>alert('Gagal mengganti password');history.back();</script>";
}
?>