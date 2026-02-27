<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>

<h2>EDIT KATEGORI</h2>

<form action="proses-edit-kategori.php" method="POST">
    
    <!-- Hidden ID -->
    <input type="hidden" name="id_kategori" value="<?= $data['id_kategori']; ?>">

    <label>nama kategori</label><br>
    <input type="text" name="ket_kategori" value="<?= $data['ket_kategori']; ?>" required>
    <br><br>


    <button type="submit">UPDATE</button>
    <a href="data-kategori.php">
        <button type="button">BATAL</button>
    </a>

</form>

</body>
</html>