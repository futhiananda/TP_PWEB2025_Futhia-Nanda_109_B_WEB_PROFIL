<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = htmlspecialchars($_POST["nama"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pesan Diterima</title>
  <!-- Font sama seperti halaman utama -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* ——— reset & body ——— */
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family:'Quicksand',sans-serif;
      background:#e4dedec6;
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      padding:20px;
    }
    /* ——— kartu hasil ——— */
    .box{
      background:#fff;
      max-width:500px;
      width:100%;
      padding:35px 30px;
      border-radius:14px;
      box-shadow:0 6px 16px rgba(0,0,0,.08);
      text-align:left;
    }
    .box h2{
      color:#685b5b;
      margin-bottom:18px;
      text-align:center;
    }
    .box p{
      margin-bottom:12px;
      line-height:1.6;
    }
    /* ——— tombol kembali ——— */
    .btn{
      display:inline-block;
      margin-top:18px;
      padding:11px 22px;
      background:#685b5b;
      color:#fff;
      text-decoration:none;
      border-radius:8px;
      font-weight:600;
      transition:background .3s,transform .2s;
    }
    .btn:hover{
      background:#4e4444;
      transform:translateY(-2px);
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>✅&nbsp;Pesan Diterima</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>Pesan:</strong> <?= $pesan ?></p>

    <a class="btn" href="index.html">⬅ Kembali ke Halaman Utama</a>
  </div>
</body>
</html>
<?php } ?>
