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
        window.location='data-aspirasi.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Status</title>
</head>
<body>

<form action="" method="POST">
    <label>Status</label>
    <select name="status">
        <option value="menunggu">Menunggu</option>
        <option value="proses">Proses</option>
        <option value="selesai">Selesai</option>
    </select>
    <br><br>

    <label>Feedback Admin</label><br>
    <textarea name="feedback"></textarea>
    <br><br>

    <button type="submit" name="update">Simpan Perubahan</button>
</form>

</body>
</html>
