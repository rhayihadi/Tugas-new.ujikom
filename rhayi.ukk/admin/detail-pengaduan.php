<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $status   = $_POST['status'];
    $feedback = $_POST['feedback']; 

    $update = mysqli_query($koneksi, "UPDATE tb_aspirasi SET 
        status='$status', 
        feedback='$feedback'
        WHERE id_pelaporan='$id'
    ");

    if ($update) {
        echo "<script>alert('Feedback berhasil disimpan!'); 
        window.location='data-pengaduan.php';</script>";
    }
}

$query = mysqli_query($koneksi, "
SELECT tb_aspirasi.*, tb_kategori.ket_kategori
FROM tb_aspirasi
LEFT JOIN tb_kategori
ON tb_aspirasi.id_kategori = tb_kategori.id_kategori
WHERE tb_aspirasi.id_pelaporan = '$id'
");

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Detail Aspirasi</title>

<style>
body{
    background:#e5e5e5;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
    width:520px;
    margin:30px auto;
    border:3px solid #333;
    background:#dcdcdc;
}

.top{
    border-bottom:3px solid #333;
    padding:10px;
}

.logout{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}

.judul{
    font-weight:bold;
    padding:15px;
    font-size:18px;
}

.table-box{
    padding:0 20px 20px 20px;
}

table{
    width:100%;
    border-collapse:separate;
    border-spacing:0 12px;
}

td{
    font-size:14px;
}

.label{
    width:140px;
    font-weight:bold;
}

.titik{
    width:10px;
}

.inputbox{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:5px 10px;
    display:inline-block;
    min-width:170px;
}

textarea{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:8px;
    width:100%;
    resize:none;
}

select{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:5px;
}

.footer{
    text-align:right;
    padding:10px 20px 15px;
}

.back{
    padding:5px 14px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}
</style>

</head>

<body>

<div class="wrapper">

<div class="top">
    <button class="logout" onclick="window.location='logout.php'">Logout</button>
</div>

<div class="judul">DETAIL ASPIRASI</div>

<div class="table-box">
<form method="POST">
<table>

<tr>
<td class="label">Kategori</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['ket_kategori'] ?></div></td>
</tr>

<tr>
<td class="label">Lokasi</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['lokasi'] ?></div></td>
</tr>

<tr>
<td class="label">Keterangan</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['ket'] ?></div></td>
</tr>

<tr>
<td class="label">Status</td>
<td class="titik">:</td>
<td>
<select name="status">
<option value="Menunggu" <?= $data['status']=='Menunggu'?'selected':'' ?>>Menunggu</option>
<option value="Proses" <?= $data['status']=='Proses'?'selected':'' ?>>Proses</option>
<option value="Selesai" <?= $data['status']=='Selesai'?'selected':'' ?>>Selesai</option>
</select>
</td>
</tr>

<tr>
<td class="label">Feedback</td>
<td class="titik">:</td>
<td>
<textarea name="feedback" rows="4"><?= $data['feedback'] ?></textarea>
</td>
</tr>

<tr>
<td class="label">Tanggal</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['tanggal'] ?></div></td>
</tr>

</table>
</div>

<div class="footer">
<button type="submit" name="update" class="back">Simpan</button>
<button type="button" class="back" onclick="history.back()">Kembali</button>
</div>

</form>
</div>

</body>
</html>