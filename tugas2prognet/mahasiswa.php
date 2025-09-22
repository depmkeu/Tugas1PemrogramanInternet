<?php
$mahasiswa = [
  "2405551001" => "Dayra",
  "2405551002" => "Della",
  "2405551003" => "Adel",
  "2405551004" => "Dewi",
  "2405551005" => "Candra"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
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
      width: 340px;
    }
    h2 {
      margin-top: 0;
      color: #5a2d82;
      text-align: center;
    }
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    li {
      background: #f9f6ff;
      margin: 6px 0;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ddd;
    }
    span {
      font-weight: bold;
      color: #5a2d82;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Daftar Mahasiswa</h2>
    <ul>
      <?php foreach ($mahasiswa as $nim => $nama): ?>
        <li><span><?php echo $nim; ?></span> - <?php echo $nama; ?></li>
      <?php endforeach; ?>
    </ul>

    <div style="margin-top:20px; text-align:left;">
      <a href="index.php" 
        style="display:inline-block; color: #7a42a8; text-decoration:none; border-radius:6px;">
      ← Kembali
      </a>
    </div>
  </div>
</body>
</html>
