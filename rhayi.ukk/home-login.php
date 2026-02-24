<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Pengaduan Sarpras</title>
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

    .container{
      background-color: #eee  ;
      border:3px solid #333;
      padding:40px 60px;
      text-align:center;
      border-radius:4px;
      box-shadow:0 0 0 2px #999 inset;
    }

    h1{
      margin:0 0 30px 0;
      font-size:28px;
      color:#333;
      line-height:1.4;
      font-weight:700;
    }

    .btn{
      display:inline-block;
      padding:10px 30px;
      font-size:20px;
      border:2px solid #333;
      border-radius:8px;
      background:#f2f2f2;
      cursor:pointer;
      font-weight:bold;
      transition:0.2s;
    }

    .btn:hover{
      background:#ddd;
      transform:scale(1.05);
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Selamat datang di aplikasi<br>pengaduan sarpras smk mutu</h1>
    <a href="login.php"><button class="btn">  LOGIN</button></a>
  </div>

</body>
</html>