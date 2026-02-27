<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");

$query = mysqli_query($koneksi,"SELECT * FROM tb_kategori");
$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kategori</title>

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&display=swap" rel="stylesheet">

    <style>
       
    </style>
</head>

<body>

<h2>DATA KATEGORI</h2>

<div class="box">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>Id</th>
            <th>Keterangan Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['id_kategori'] ?></td>
            <td><?= $data['ket_kategori'] ?></td>
            <td class="aksi">
                <a href="edit-kategori.php?id=<?= $data['id_kategori'] ?>">
                    <button><b>EDIT</b></button>
                </a>
                <a href="proses-hapus-kategori.php?id=<?= $data['id_kategori'] ?>"
                   onclick="return confirm('hapus')">
                    <button><b>HAPUS</b></button>
                </a>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="kembali">
    <a href="dashboard-admin.php">
        <button><b>KEMBALI</b></button>
    </a>
</div>

</body>
</html>