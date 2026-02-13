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
  background:#ffffff;
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
}

.menu-btn:hover, .logout-btn:hover{
  background:#ddd;
  transform:scale(1.05);
}
</style>
</head>
<body>

<div class="main-box">
    <a href="logout.php"></a>
  <div class="top-bar">
    <button class="logout-btn">LOGOUT</button>
  </div>

  <div class="content">
    <button class="menu-btn"><a href="input-aspirasi.php">input aspirasi</a></button>
    <button class="menu-btn">Data aspirasi</button>
  </div>
</div>

</body>
</html>
