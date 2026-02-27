<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>

<h2>EDIT DATA SISWA</h2>

<form action="proses-edit-siswa.php" method="POST">
    
    <!-- Hidden ID -->
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <label>NIS</label><br>
    <input type="text" name="nis" value="<?= $data['nis']; ?>" required>
    <br><br>

    <label>Username</label><br>
    <input type="text" name="username" value="<?= $data['username']; ?>" required>
    <br><br>

    <label>Password</label><br>
    <input type="text" name="password" value="<?= $data['password']; ?>" required>
    <br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" value="<?= $data['kelas']; ?>" required>
    <br><br>

    <button type="submit">UPDATE</button>
    <a href="data-siswa.php">
        <button type="button">BATAL</button>
    </a>

</form>

</body>
</html>