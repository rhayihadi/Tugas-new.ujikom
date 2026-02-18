<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Aspirasi</title>

<style>
body{
    background:#eee;
    font-family: Arial, Helvetica, sans-serif;
}

/* KOTAK LUAR */
.wrapper{
    width:650px;
    margin:30px auto;
    border:3px solid #444;
    background:#ddd;
}

/* HEADER */
.top{
    border-bottom:3px solid #444;
    padding:10px;
}

.logout{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
}

/* JUDUL */
.judul{
    font-weight:bold;
    padding:15px;
}

/* FILTER */
.filter{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 15px 10px 15px;
}

.cari{
    border:2px solid #333;
    border-radius:6px;
    padding:3px 8px;
}

.tanggal{
    border:2px solid #333;
    border-radius:6px;
    padding:3px;
}

/* TABEL */
.table-box{
    padding:10px 15px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#eee;
}

th, td{
    border:2px solid #444;
    padding:6px;
    font-size:14px;
    text-align:center;
}

th{
    background:#ddd;
}

/* FOOTER */
.footer{
    text-align:center;
    padding:15px;
}

.back{
    padding:5px 15px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
}
</style>

</head>
<body>

<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");
$no = 1;

$query = mysqli_query($koneksi, "SELECT tb_aspirasi.*, tb_kategori.ket_kategori 
FROM tb_aspirasi
LEFT JOIN tb_kategori
ON tb_aspirasi.id_kategori = tb_kategori.id_kategori");
?>

<div class="wrapper">

<div class="top">
    <a href="logout.php">
    <button class="logout-btn">Logout</button>
</div>
</a>
    
<div class="judul">DATA ASPIRASI</div>

<div class="filter">
<div>
<input class="cari" placeholder="">
<button>Cari</button>
</div>
<input type="date" class="tanggal">
</div>

<div class="table-box">

<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>No</th>
<th>Id kategori</th>
<th>Nama kategori</th>
<th>Lokasi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Tanggal</th>
<th>Detail</th>
</tr>

<?php while ($data = mysqli_fetch_assoc($query)) { ?>
<tr>
<td><?=  $no++ ?></td>
<td><?=  $data['id_kategori'] ?></td>
<td><?=  $data['ket_kategori'] ?></td>
<td><?=  $data['lokasi'] ?></td>
<td><?=  $data['ket'] ?></td>
<td><?=  $data['status'] ?></td>
<td><?=  $data['tanggal'] ?></td>
<td>
<a href="detail-aspirasi.php?id=<?= $data['id_pelaporan'] ?>">
<button>Detail</button>
</a>
</td>
<tr>
<?php } ?>

</table>

</div>

<div class="footer">
<button class="back" onclick="history.back()">Kembali</button>
</div>

</div>

</body>
</html>
