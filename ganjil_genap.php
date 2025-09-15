<?php
$hasil = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka = $_POST['angka'];

    if ($angka === "") {
        $error = "Angka tidak boleh kosong.";
    } else {
        // Cek ganjil/genap dengan modulus
        if ($angka % 2 == 0) {
            $hasil = "$angka adalah bilangan Genap.";
        } else {
            $hasil = "$angka adalah bilangan Ganjil.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cek Ganjil / Genap</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body { font-family: Arial, sans-serif; background:#f6f5fb; display:flex; justify-content:center; align-items:center; min-height:100vh; }
    .card { background:#fff; padding:20px; border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,0.06); width:320px; text-align:center; }
    h2 { margin-top:0; color:#5a2d82; }
    input { width:90%; padding:8px; margin:8px 0; border:1px solid #ccc; border-radius:6px; }
    button { background:#5a2d82; color:#fff; padding:8px 16px; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#7a42a8; }
    .result { margin-top:12px; font-weight:bold; color:#222; }
    .error { margin-top:12px; color:#a60000; font-size:13px; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Cek Ganjil / Genap</h2>
    <form method="post" action="">
      <input type="number" name="angka" placeholder="Masukkan angka" value="<?php echo isset($angka) ? htmlspecialchars($angka) : ''; ?>" required>
      <br>
      <button type="submit">Cek</button>
    </form>

    <?php if ($error !== ""): ?>
      <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if ($hasil !== "" && $error === ""): ?>
      <div class="result"><?php echo $hasil; ?></div>
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
