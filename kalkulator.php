<?php
$hasil = "";
$error = "";

// Cek form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil raw input (string)
    $rawA = isset($_POST['angka1']) ? $_POST['angka1'] : '';
    $rawB = isset($_POST['angka2']) ? $_POST['angka2'] : '';
    $op   = isset($_POST['operator']) ? $_POST['operator'] : '';

    // Validasi: pastikan kedua input terisi dan numeric
    if ($rawA === '' || $rawB === '') {
        $error = "Kedua angka harus diisi.";
    } elseif (!is_numeric($rawA) || !is_numeric($rawB)) {
        $error = "Masukkan angka yang valid (boleh desimal).";
    } else {
        // Konversi ke number (float) sebelum operasi
        $a = floatval($rawA);
        $b = floatval($rawB);

        // Gunakan switch untuk memilih operator
        switch ($op) {
            case 'tambah':
                $hasil = $a + $b;
                break;
            case 'kurang':
                $hasil = $a - $b;
                break;
            case 'kali':
                $hasil = $a * $b;
                break;
            case 'bagi':
                if ($b == 0) {
                    $error = "Tidak bisa dibagi dengan nol.";
                } else {
                    $hasil = $a / $b;
                }
                break;
            default:
                $error = "Operator tidak dikenal.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator Sederhana</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
   body { font-family: Arial, sans-serif; background:#f6f5fb; display:flex; justify-content:center; align-items:center; min-height:100vh; } 
   .card { background:#fff; padding:20px; border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,0.06); width:320px; text-align:center; } 
   h2 { margin-top:0; color:#5a2d82; } input, select { width:90%; padding:8px; margin:6px 0; border:1px solid #ccc; border-radius:6px; } 
   button { background:#5a2d82; color:#fff; padding:8px 16px; border:none; border-radius:6px; cursor:pointer; } 
   button:hover { background:#7a42a8; } .result { margin-top:12px; font-weight:bold; color:#222; } 
   .error { margin-top:12px; color:#a60000; font-size:13px; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Kalkulator PHP</h2>

    <!-- Form: input angka & operator -->
    <form method="post" action="">
      <input type="text" name="angka1" placeholder="Angka pertama" value="<?php echo isset($rawA) ? htmlspecialchars($rawA) : ''; ?>" required>
      <input type="text" name="angka2" placeholder="Angka kedua"  value="<?php echo isset($rawB) ? htmlspecialchars($rawB) : ''; ?>" required>

      <select name="operator" required>
        <option value="tambah" <?php if(isset($op)&&$op=='tambah') echo 'selected'; ?>>Tambah (+)</option>
        <option value="kurang" <?php if(isset($op)&&$op=='kurang') echo 'selected'; ?>>Kurang (-)</option>
        <option value="kali" <?php if(isset($op)&&$op=='kali') echo 'selected'; ?>>Kali (×)</option>
        <option value="bagi" <?php if(isset($op)&&$op=='bagi') echo 'selected'; ?>>Bagi (÷)</option>
      </select>

      <button type="submit">Hitung</button>
    </form>

    <!-- Tampilkan error / hasil -->
    <?php if ($error !== ""): ?>
      <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if ($hasil !== "" && $error === ""): ?>
      <div class="result">Hasil: <?php echo htmlspecialchars($hasil); ?></div>
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
