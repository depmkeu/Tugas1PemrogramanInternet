<?php

$nama = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    if ($nama === '') {
        $error = "Nama tidak boleh kosong.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Form Ucapan</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    :root{
      --bg: #f3f0ff;
      --card: #ffffff;
      --accent: #5a2d82;
      --accent-2: #7a42a8;
      --text: #333;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: Inter, "Segoe UI", Roboto, Arial, sans-serif;
      background: linear-gradient(180deg, #fbf9ff 0%, var(--bg) 100%);
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      padding:20px;
      color:var(--text);
    }
    .card{
      background:var(--card);
      width:100%;
      max-width:380px;
      border-radius:12px;
      padding:22px;
      box-shadow:0 8px 24px rgba(76, 46, 122, 0.08);
      text-align:center;
    }
    h2{
      margin:0 0 10px 0;
      color:var(--accent);
      font-size:20px;
      letter-spacing:0.2px;
    }
    p.lead{
      margin:0 0 18px 0;
      font-size:14px;
      color:#5b5b5b;
    }
    label{
      display:block;
      text-align:left;
      font-size:13px;
      margin-bottom:6px;
      color:#444;
    }
    input[type="text"]{
      width:100%;
      padding:10px 12px;
      border-radius:8px;
      border:1px solid #e4e0f1;
      font-size:14px;
      margin-bottom:12px;
      outline:none;
      transition:box-shadow .12s, border-color .12s;
    }
    input[type="text"]:focus{
      box-shadow:0 0 0 4px rgba(122,66,168,0.08);
      border-color:var(--accent-2);
    }
    .btn{
      display:inline-block;
      background:var(--accent);
      color:#fff;
      padding:9px 18px;
      border-radius:8px;
      border:0;
      cursor:pointer;
      font-size:14px;
    }
    .btn:hover{ background: var(--accent-2); }
    .result{
      margin-top:16px;
      font-weight:600;
      color:#222;
    }
    .error{
      margin-top:8px;
      color:#a60000;
      font-size:13px;
    }
    footer {
      margin-top:18px;
      font-size:12px;
      color:#777;
    }
    @media (max-width:420px){
      .card{ padding:16px; border-radius:10px; }
    }
  </style>
</head>
<body>
  <div class="card" role="main" aria-labelledby="judul">
    <h2 id="judul">Form Ucapan</h2>
    <p class="lead">Masukkan namamu lalu tekan <strong>Kirim</strong>.</p>

    <form method="post" action="">
      <label for="nama">Nama</label>
      <input
        id="nama"
        type="text"
        name="nama"
        placeholder="Contoh: Devi"
        value="<?php echo htmlspecialchars($nama); ?>"
        required
        autocomplete="name"
      >
      <button type="submit" class="btn">Kirim</button>
    </form>

    <?php if ($error !== ''): ?>
      <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if ($nama !== '' && $error === ''): ?>
      <div class="result">Halo, <?php echo htmlspecialchars($nama); ?> selamat belajar PHP!</div>
    <?php endif; ?>

     <div style="margin-top:20px; text-align:left;">
      <a href="index.php" 
        style="display:inline-block; color: #7a42a8; text-decoration:none; border-radius:6px;">
      ← Kembali
      </a>
    </div>
  </div>
</body>
</html>
