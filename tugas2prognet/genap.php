<?php
$hasil = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1 === "" || $n2 === "") {
        $error = "Kedua angka harus diisi.";
    } elseif (!is_numeric($n1) || !is_numeric($n2)) {
        $error = "Input harus berupa angka.";
    } elseif ($n1 >= $n2) {
        $error = "Syarat: n1 harus lebih kecil dari n2.";
    } else {
        $hasil = "Bilangan genap dari $n1 sampai $n2:<br>";
        for ($i = $n1; $i <= $n2; $i++) {
            if ($i % 2 == 0) {
                $hasil .= $i . " ";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Bilangan Genap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: Arial, sans-serif; background:#f6f5fb; display:flex; justify-content:center; align-items:center; min-height:100vh; margin:0; }
    .card { background:#fff; padding:20px; border-radius:12px; box-shadow:0 6px 16px rgba(0,0,0,0.1); width:360px; text-align:center; }
    h2 { margin-top:0; color:#5a2d82; }
    input { width:90%; padding:8px; margin:6px 0; border:1px solid #ccc; border-radius:6px; }
    button { background:#5a2d82; color:#fff; padding:8px 16px; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#7a42a8; }
    .result { margin-top:12px; font-weight:bold; color:#222; }
    .error { margin-top:12px; color:#a60000; font-size:13px; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Tampilkan Bilangan Genap</h2>
    <form method="post" action="">
      <input type="number" name="n1" placeholder="Masukkan n1" value="<?php echo isset($n1) ? htmlspecialchars($n1) : ''; ?>" required>
      <input type="number" name="n2" placeholder="Masukkan n2" value="<?php echo isset($n2) ? htmlspecialchars($n2) : ''; ?>" required>
      <br>
      <button type="submit">Tampilkan</button>
    </form>

    <?php if ($error !== ""): ?>
      <div class="error"><?php echo $error; ?></div>
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
