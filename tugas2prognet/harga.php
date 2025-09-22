<?php
// Array associative: barang => harga
$barang = [
  "Buku Tulis" => 5000,
  "Pulpen"     => 3000,
  "Penggaris"  => 4000,
  "Penghapus"  => 2000,
  "Pensil"     => 2500
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Harga Barang</title>
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
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
      width: 360px;
    }
    h2 {
      margin-top: 0;
      color: #5a2d82;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 12px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    th {
      background: #5a2d82;
      color: #fff;
      text-align: center;
    }
    td:first-child {
      text-align: left;
    }
    td:last-child {
      text-align: right;
    }
    tr:nth-child(even) {
      background: #f9f6ff;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Daftar Harga Barang</h2>
    <table>
      <tr>
        <th>Nama Barang</th>
        <th>Harga (Rp)</th>
      </tr>
      <?php foreach ($barang as $nama => $harga): ?>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo number_format($harga, 0, ',', '.'); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <div style="margin-top:20px; text-align:left;">
      <a href="index.php" 
        style="display:inline-block; color: #7a42a8; text-decoration:none; border-radius:6px;">
      ← Kembali
      </a>
    </div>
  </div>
</body>
</html>
