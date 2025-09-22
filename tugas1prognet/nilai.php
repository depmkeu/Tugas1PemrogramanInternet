<?php
$hasil = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nilai = $_POST['nilai'];

    // validasi nilai
    if ($nilai === "" || !is_numeric($nilai)) {
        $error = "Masukkan nilai berupa angka.";
    } elseif ($nilai < 0 || $nilai > 100) {
        $error = "Nilai harus di antara 0 - 100.";
    } else {
        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 70) {
            $grade = "B";
        } elseif ($nilai >= 55) {
            $grade = "C";
        } elseif ($nilai >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        $hasil = "Nilai: $nilai → Grade: $grade";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menentukan Nilai Huruf</title>
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
    <h2>Cek Nilai Huruf</h2>
    <form method="post" action="">
      <input type="number" name="nilai" placeholder="Masukkan nilai (0-100)" min="0" max="100" value="<?php echo isset($nilai) ? htmlspecialchars($nilai) : ''; ?>" required>
      <br>
      <button type="submit">Cek Grade</button>
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
