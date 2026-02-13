<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

if($koneksi){
    echo "koneksi berhasil";
}

else {
    echo "koneksi eror";
}

mysqli_query( $koneksi,"INSERT INTO `tb_aspirasi` 
-- `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`)
VALUES (NULL, '201222', '1', 'LAB RPL', 'RHAYI RUSAKIN KOMPUTER', 'proses', NULL )" );