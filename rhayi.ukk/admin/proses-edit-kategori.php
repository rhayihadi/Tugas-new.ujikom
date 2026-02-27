<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

$id = $_POST['id_kategori'];
$kategori     = $_POST['ket_kategori'];


$query = "UPDATE tb_kategori SET 
           ket_kategori ='$kategori'
          WHERE id_kategori='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: data-kategori.php");
} else {
    echo "Gagal mengupdate data!";
}

exit;
?>