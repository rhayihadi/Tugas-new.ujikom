<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("Location: logout.php");
    exit;
}

$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");
if(!$koneksi) die("Koneksi gagal: ".mysqli_connect_error());

// =================== UPDATE STATUS SELESAI ===================
if(isset($_POST['selesai'])){
    $id = intval($_POST['id']);
    mysqli_query($koneksi, "UPDATE tb_aspirasi SET status='selesai' WHERE id_pelaporan=$id");
    header("Location: data-aspirasi.php");
    exit;
}

// =================== AMBIL DATA ASPIRASI ===================
$query = mysqli_query($koneksi,"
SELECT tb_aspirasi.*, tb_kategori.ket_kategori
FROM tb_aspirasi
LEFT JOIN tb_kategori ON tb_aspirasi.id_kategori = tb_kategori.id_kategori
ORDER BY tb_aspirasi.tanggal DESC
");
$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Aspirasi Admin</title>
<style>
body{background:#ddd; font-family:Arial, Helvetica, sans-serif;}
.wrapper{width:800px; margin:30px auto; border:3px solid #444; background:#ddd; padding:20px;}
.judul{font-weight:bold; font-size:22px; text-align:center; margin-bottom:20px; border-bottom:3px solid #444; padding-bottom:10px;}
.table-box{overflow-x:auto;}
table{width:100%; border-collapse:collapse; background:#eee;}
th, td{border:2px solid #444; padding:8px; text-align:center;}
th{background:#ddd;}
tr:hover{background:#dcdcdc;}
button{padding:5px 12px; border-radius:6px; border:2px solid #333; background:#eee; cursor:pointer; font-weight:bold;}
button:hover{background:#ccc;}
.back-btn{margin-top:15px; display:inline-block; padding:8px 16px; border:2px solid #333; border-radius:6px; background:#eee; text-decoration:none; font-weight:bold;}
.back-btn:hover{background:#ccc;}
</style>
</head>
<body>

<div class="wrapper">
    <div class="judul">DATA ASPIRASI ADMIN</div>

    <div class="table-box">
        <table>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>NIS</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php while($data = mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= date('d-m-Y', strtotime($data['tanggal'])) ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['ket_kategori'] ?></td>
                <td><?= $data['lokasi'] ?></td>
                <td><?= $data['ket'] ?></td>
                <td><?= $data['status'] ?></td>
                <td>
                    <?php if($data['status'] != 'selesai'): ?>
                    <form method="POST" style="margin:0;">
                        <input type="hidden" name="id" value="<?= $data['id_pelaporan'] ?>">
                        <button type="submit" name="selesai">Selesai</button>
                    </form>
                    <?php else: ?>
                        <span>Selesai</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <a href="histori-aspirasi.php" class="back-btn">LIHAT HISTORI</a>
    <a href="dashboard-admin.php" class="back-btn">KEMBALI</a>
</div>

</body>
</html>