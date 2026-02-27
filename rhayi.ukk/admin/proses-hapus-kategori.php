<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

$id = $_GET['id'];

$query = "DELETE FROM tb_kategori WHERE id_kategori='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: data-kategori.php?status=hapus_berhasil");
} else {
    header("Location: data-kategori.php?status=hapus_gagal");
}

exit;
?>