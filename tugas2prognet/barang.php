<?php 
// Array default
$barang = ["Buku Tulis", "Pulpen", "Penggaris", "Penghapus"];

// Kalau ada input dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baru = trim($_POST['barang_baru']);
    if ($baru !== "") {
        $barang[] = htmlspecialchars($baru);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Barang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f6f5fb;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .card {
      background: #fff;
      padding: 24px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      width: 340px;
      text-align: center;
    }
    h2 {
      margin-top: 0;
      color: #5a2d82;
    }
    ul {
      list-style: none;
      padding: 0;
      margin: 10px 0 20px;
      text-align: left;
    }
    li {
      background: #f3f0ff;
      margin: 6px 0;
      padding: 8px;
      border-radius: 6px;
      color: #333;
    }
    input {
      width: 90%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 8px;
    }
    button {
      background: #5a2d82;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background: #7a42a8;
    }
    a {
      display: inline-block;
      margin-top: 14px;
      color: #7a42a8;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Daftar Barang</h2>

    <!-- Daftar barang -->
    <ul>
      <?php foreach ($barang as $b): ?>
        <li><?php echo $b; ?></li>
      <?php endforeach; ?>
    </ul>

    <!-- Form tambah barang -->
    <form method="post" action="">
      <input type="text" name="barang_baru" placeholder="Tambah barang baru">
      <button type="submit">Tambah</button>
    </form>

   <div style="margin-top:20px; text-align:left;">
      <a href="index.php" 
        style="display:inline-block; color: #7a42a8; text-decoration:none; border-radius:6px;">
      ← Kembali
      </a>
    </div>
  </div>
</body>
</html>
