<?php
session_start();
include 'config/koneksi.php';
include 'config/auth.php'; // Pastikan sudah login

if (isset($_POST['ganti'])) {
    $id_user = $_SESSION['id_user'];
    $pass_lama = $_POST['password_lama'];
    $pass_baru = $_POST['password_baru'];
    $konfirmasi = $_POST['konfirmasi_password'];

    // 1. Ambil password lama dari database berdasarkan ID user
    $query = mysqli_query($koneksi, "SELECT password FROM user WHERE id = '$id_user'");
    $data = mysqli_fetch_assoc($query);

    // 2. Cek apakah password lama benar
    if (password_verify($pass_lama, $data['password'])) {

        // 3. Cek apakah password baru dan konfirmasi cocok
        if ($pass_baru == $konfirmasi) {

            // 4. Enkripsi password baru
            $hash_baru = password_hash($pass_baru, PASSWORD_DEFAULT);

            // 5. Update ke database
            $update = mysqli_query($koneksi, "UPDATE user SET password = '$hash_baru' WHERE id = '$id_user'");

            if ($update) {
                echo "<script>alert('Password berhasil diganti!'); window.location='index.php';</script>";
            }
        } else {
            echo "<script>alert('Konfirmasi password baru tidak cocok!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Password lama Anda salah!'); window.history.back();</script>";
    }
}
?>
