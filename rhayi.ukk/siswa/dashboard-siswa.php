<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#999;
  font-family: Arial, Helvetica, sans-serif;
}

.main-box{
  width:520px;
  border:3px solid #333;
  background:#eee;
}

.top-bar{
  border-bottom:3px solid #333;
  padding:10px;
}

.logout-btn{
  padding:5px 15px;
  font-size:18px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:8px;
  background:#f5f5f5;
  cursor:pointer;
}

.content{
  height:220px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  gap:20px;
}

.menu-btn{
  padding:10px 25px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:10px;
  background:#f5f5f5;
  cursor:pointer;
  margin: 10px;
}

.menu-btn:hover, .logout-btn:hover{
  background:#ddd;
  transform:scale(1.05);
}
.b{
  display: flex;
}
</style>
</head>
<body>

<div class="main-box">
    <a href="logout.php">
  <div class="top-bar">
    <button class="logout-btn">LOGOUT</button>
</div>
</a>
  <div class="content">
  <div class="b">  
  <a href="input-aspirasi.php"><button class="menu-btn">Buat aspirasi</button></a>
    <a href="data-aspirasi.php"><button class="menu-btn">Data aspirasi</button></a>
</div>
    <button class="menu-btn">Ganti password</button>
  </div>
</div>

</body>
</html>
