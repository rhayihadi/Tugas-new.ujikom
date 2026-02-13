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
  width:560px;
  border:3px solid #333;
  background:#eee;
}

.header{
  padding:10px;
  border-bottom:3px solid #333;
}

.logout{
  padding:6px 18px;
  font-size:18px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:10px;
  background:#f5f5f5;
  cursor:pointer;
}

.menu-area{
  height:260px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  gap:20px;
}

.btn{
  padding:10px 28px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:12px;
  background:#f5f5f5;
  cursor:pointer;
}

.btn:hover, .logout:hover{
  background:#ddd;
  transform:scale(1.05);
}
</style>
</head>
<body>

<div class="wrapper">
  <div class="header">
    <a href="logout.php"><button class="logout">LOGOUT</button></a>
  </div>

  <div class="menu-area">
    <button class="btn">List Aspirasi</button>
    <button class="btn">data Aspirasi</button>
    <button class="btn">Tambahkan data siswa</button>
  </div>
</div>

</body>
</html>