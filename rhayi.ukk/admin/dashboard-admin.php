<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Menu Admin</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#ffffff;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
  width:600px;
  border:3px solid #333;
  background:#eee;
}

.header{
  padding:12px;
  border-bottom:3px solid #333;
}

.logout{
  padding:6px 18px;
  font-size:18px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:12px;
  background:#f5f5f5;
  cursor:pointer;
}

.menu-area{
  padding:40px 20px;
  display:grid;
  grid-template-columns: 1fr 1fr;
  gap:30px 40px;
  justify-items:center;
}

.btn{
  padding:12px 26px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:14px;
  background:#f5f5f5;
  cursor:pointer;
  transition:.2s;
}

.btn:hover,
.logout:hover{
  background:#ddd;
  transform:scale(1.05);
}

a{
  text-decoration:none;
}
</style>
</head>

<body>

<div class="wrapper">

  <div class="header">
    <a href="logout.php">
      <button class="logout">LOGOUT</button>
    </a>
  </div>

  <div class="menu-area">

    <a href="data-kategori.php">
      <button class="btn">Data kategori</button>
    </a>

    <a href="data-Pengaduan.php">
      <button class="btn">Data pengaduan</button>
    </a>

    <a href="data-siswa.php">
      <button class="btn">Data akun siswa</button>
    </a>

    <a href="form-siswa.php">
      <button class="btn">Daftar akun</button>
    </a>

  </div>

</div>

</body>
</html>