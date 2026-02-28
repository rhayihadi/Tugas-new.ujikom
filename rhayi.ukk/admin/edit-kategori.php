<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&display=swap" rel="stylesheet">

    <style>
body{
    background:#eee;
    font-family: 'Baloo 2', Arial, sans-serif;
}

/* WRAPPER */
.wrapper{
    width:500px;
    margin:50px auto;
    padding:30px;
    background:#ddd;
    border:3px solid #444;
    border-radius:10px;
}

/* TITLE */
.title{
    text-align:center;
    font-weight:bold;
    font-size:20px;
    margin-bottom:25px;
    border-bottom:3px solid #444;
    padding-bottom:10px;
}

/* FORM */
form input[type="text"]{
    width:100%;
    padding:10px;
    margin-bottom:15px;
    border-radius:6px;
    border:1px solid #333;
    font-size:14px;
}

form button{
    padding:8px 16px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
    margin-right:5px;
}

form button:hover{
    background:#ccc;
}

a{
    text-decoration:none;
}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="title">EDIT KATEGORI</div>

    <form action="proses-edit-kategori.php" method="POST">
        <!-- Hidden ID -->
        <input type="hidden" name="id_kategori" value="<?= $data['id_kategori']; ?>">

        <label>Nama Kategori</label>
        <input type="text" name="ket_kategori" value="<?= $data['ket_kategori']; ?>" required>

        <button type="submit">UPDATE</button>
        <a href="data-kategori.php">
            <button type="button">BATAL</button>
        </a>
    </form>
</div>

</body>
</html>
