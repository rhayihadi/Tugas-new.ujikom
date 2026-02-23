<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Input Aspirasi</title>
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
  padding:20px 50px 30px;
}

.title{
  font-size:26px;
  font-weight:bold;
  margin-bottom:20px;
  color:#333;
}

.row{
  display:flex;
  align-items:center;
  margin:2px 0;
  font-size:20px;
  font-weight:bold;
  color:#333;
}

.label{
  width:150px;
}

.colon{
  width:30px;
}

input, select{
  flex:1;
  height:30px;
  border:2px solid #333;
  border-radius:6px;
  padding:3px 8px;
  font-size:16px;
  outline:none;
}

textarea{
  width:90%;
  height:120px;
  border:3px solid #333;
  border-radius:20px;
  margin-top:10px;
  padding:10px;
  font-size:16px;
  resize:none;
  outline:none;
}

.btn-area{
  display:flex;
  justify-content:space-around;
  margin-top:20px;
}

button{
  padding:10px 35px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:12px;
  background:#f5f5f5;
  cursor:pointer;
}

button:hover{
  background:#ddd;
  transform:scale(1.05);
}
</style>
</head>
<body>
<form action="proses_input.php" method="post">
<div class="wrapper">
  <div class="title">INPUT ASPIRASI</div>

  <div class="row">
    <div class="label">Nis</div>
    <div class="colon">:</div>
    <input type="text" name="nis" placeholder="Masukkan Nis" required>
  </div>

  <div class="row">
    <div class="label">Kategori</div>
    <div class="colon">:</div>
    <select name="kategori">
      <option>Pilih kategori</option>
      <option value="1">Fasilitas</option>
      <option value="2">Kebersihan</option>
      <option value="3">Keamanan</option>
    </select>
  </div>

  <div class="row">
    <div class="label">Lokasi</div>
    <div class="colon">:</div>
    <input type="text" name="lokasi" placeholder="Masukkan Lokasi" required>
  </div>

  <!-- TANGGAL SUDAH DISESUAIKAN -->
  <div class="row">
    <div class="label">Tanggal</div>
    <div class="colon">:</div>
    <input type="date" name="tanggal" required>
  </div>

  <div class="row" style="align-items:flex-start">
    <div class="label">Keterangan</div>
    <div class="colon">:</div>
  </div>

  <textarea name="keterangan" placeholder="Masukkan Keterangan" required></textarea>

  <div class="btn-area">
    <button type="submit">Kirim</button>
    <a href="dashboard-siswa.php"><button type="button">Batal</button></a>
  </div>
</div>
</form>
</body>
</html>
