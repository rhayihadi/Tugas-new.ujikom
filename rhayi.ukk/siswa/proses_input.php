<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");
$nis = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$ket = $_POST['keterangan'];






mysqli_query( $koneksi,"INSERT INTO `tb_aspirasi` 
-- `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`)
VALUES (NULL, '$nis', '$kategori', '$lokasi', '$ket', 'proses', NULL )" );
echo'berhasil';
