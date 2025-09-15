<?php
$hasil = "";

// cek form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama']);
    $umur   = trim($_POST['umur']);
    $gender = ($_POST['gender']);
    $alamat = trim($_POST['alamat']);

    $hasil = "Halo, nama saya $nama. Umur saya $umur tahun. 
              Saya seorang $gender. Saya tinggal di $alamat.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Biodata Singkat</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    :root{
      --bg: #f6f5fb;
      --card: #fff;
      --accent: #5a2d82;
    }
    * { box-sizing: border-box; }

    body{
      margin: 0;
      font-family: Arial, sans-serif;
      background: var(--bg);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 30px;
    }

    .card {
      background: var(--card);
      padding: 24px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.06);
      width: 100%;
      max-width: 520px;
      min-width: 280px;
    }

    h2 { margin-top:0; color:var(--accent); text-align:center; }
    label { display:block; margin-top:10px; font-size:14px; color:#333; }

    input, textarea {
      width:100%;
      padding:10px;
      margin-top:6px;
      border:1px solid #ddd;
      border-radius:8px;
      font-size:14px;
    }
    textarea { resize:vertical; }

    .gender { margin-top:6px; }
    .gender input { margin-right:6px; width: 100%; display: flex; }

    button {
      display:block;
      width:100%;
      margin-top:14px;
      background:var(--accent);
      color:#fff;
      border:0;
      padding:10px;
      border-radius:8px;
      cursor:pointer;
      font-size:14px;
    }
    button:hover { background:#7a42a8; }

    .result { margin-top:14px; font-weight:600; color:#222; }
    .error  { margin-top:12px; color:#a60000; font-size:13px; }
    .input-radio label{
    width: 100%;
    display: flex;
    align-items: center;
}
    .input-radio input{
    width:fit-content;
    margin-top: 0px;
}
  </style>
</head>
<body>
  <div class="card">
    <h2>Form Biodata</h2>
    <form method="post" action="">
      <label>Nama:</label>
      <input type="text" name="nama" value="<?php echo isset($nama) ? htmlspecialchars($nama) : ''; ?>" required>
      <label>Umur:</label>
      <input type="number" name="umur" min="1" value="<?php echo isset($umur) ? htmlspecialchars($umur) : ''; ?>" required>
      <label>Jenis Kelamin:</label>
      <div class="gender">
      <div class="input-radio"> 
        <label><input type="radio" name="gender" value="Laki-laki" 
        <?php if(isset($gender)&&$gender=="Laki-laki") echo "checked"; ?>> Laki-laki</label>
      </div>
      <div class="input-radio"> 
        <label><input type="radio" name="gender" value="Perempuan" 
        <?php if(isset($gender)&&$gender=="Perempuan") echo "checked"; ?>> Perempuan</label>
      </div>
      </div>
      <label>Alamat:</label>
      <textarea name="alamat" rows="3" required><?php echo isset($alamat) ? htmlspecialchars($alamat) : ''; ?></textarea>
      <button type="submit">Kirim</button>
    </form>

    <?php if ($hasil): ?>
      <div class="result"><?php echo nl2br(htmlspecialchars($hasil)); ?></div>
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
