<?php
// koneksi ke database
  $koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");
    $no = 1;

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $status   = $_POST['status'];
    $feedback = $_POST['feedback']; 

    // 2. Perintah SQL untuk memperbarui data (UPDATE)
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
    <title>Update Status</title>
</head>
<body>
    <h2>Detail Pengaduan</h2>
    <form method="POST">
        <table border="1" cellpaddding="10" cellspacing= "0">
            <tr>
                <td><b>ID pelaporan</b></td>
                <td><?= $data['id_pelaporan'] ?></td>
            </tr>
             <tr>
                <td><b>Kategori</b></td>
                <td><?= $data['id_kategori'] ?></td>
            </tr>
             <tr>
                <td><b>Lokasi</b></td>
                <td><?= $data['lokasi'] ?></td>
            </tr>
             <tr>
                <td><b>keterangan</b></td>
                <td><?= $data['ket'] ?></td>
            </tr>
            <td><b>Status</b></td>
            <td>
                <select name="status">
                    <option value="Menunggu" <?= $data['status'] == 'Menunggu' ? 'selected' : '' ?>>Menunggu</option>
                    <option value="Proses" <?= $data['status'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
                    <option value="Selesai" <?= $data['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
            </td>
                
            <tr>
                <td><b>Feedback Admin</b></td>
                <td>
                    <textarea name="feedback" rows="4" cols="40"><?= $data['feedback'] ?></textarea>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="simpan">Simpan perubahan</button>
        <a href="data-pengaduan.php">Kembali</a>
    </form>
    </body>
    </html>