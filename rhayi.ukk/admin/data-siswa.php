<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Akun Siswa</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#fff;
    font-family:Arial, Helvetica, sans-serif;
}

/* BOX UTAMA */
.wrapper{
    width:650px;
    border:3px solid #333;
    background:#eee;
}

/* HEADER */
.header{
    border-bottom:3px solid #333;
    padding:10px;
}

.logout{
    border:3px solid #333;
    border-radius:10px;
    padding:5px 16px;
    font-weight:bold;
    background:#f5f5f5;
    cursor:pointer;
}

/* JUDUL */
.title{
    text-align:center;
    font-weight:bold;
    padding:20px 0;
}

/* AREA TABEL */
.table-box{
    width:520px;
    margin:0 auto;
    border:3px solid #333;
    padding:20px;
    background:#eee;
}

/* TABEL */
table{
    width:100%;
    border-collapse:collapse;
}

th, td{
    border:2px solid #333;
    padding:6px;
    text-align:center;
}

th{
    background:#ddd;
}

/* TOMBOL AKSI */
.btn{
    border:2px solid #333;
    background:#f5f5f5;
    padding:2px 10px;
    border-radius:6px;
    cursor:pointer;
    font-size:13px;
}

.btn:hover{
    background:#ddd;
}

/* FOOTER */
.footer{
    text-align:center;
    padding:20px;
}

.back{
    border:3px solid #333;
    background:#f5f5f5;
    padding:6px 20px;
    border-radius:10px;
    font-weight:bold;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="wrapper">

<div class="header">
<button class="logout">Logout</button>
</div>

<div class="title">HALAMAN DATA AKUN SISWA</div>

<div class="table-box">

<table>
<tr>
<th>Nis</th>
<th>Nama</th>
<th>Kelas</th>
<th>Aksi</th>
</tr>

<tr>
<td> </td>
<td> </td>
<td> </td>
<td>
<button class="btn">Edit</button>
<button class="btn">Hapus</button>
</td>
</tr>

</table>

</div>

<div class="footer">
<button class="back">Kembali</button>
</div>

</div>

</body>
</html>