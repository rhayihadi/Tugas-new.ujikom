<?php
$koneksi 'koneksi.php';

//cek id dari url
if (!isset($_GET['id'])) {
    echo "ID pengaduan tidak ditemukan!";
    exit;
}

$id =$_GET['id'];

//update data
if (isset($_POST['simpan'])) {
    $status     = $_POST['status'];
    $feedback   = $_POST['feedback'];

    mysqli_query($koneksi, "UPDATE tb_aspirasi
                            SET status'$status', feedback")
}