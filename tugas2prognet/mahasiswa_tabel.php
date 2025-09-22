<?php
$mahasiswa = [
  ["nim" => "2405551035", "nama" => "Ni Putu Candradevi Davantari", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551036", "nama" => "I Gusti Ayu Putri Lestari", "umur" => 18, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551037", "nama" => "I Ketut Budi Santosa", "umur" => 20, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551038", "nama" => "Ni Luh Ayu Kartika", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551039", "nama" => "I Wayan Gede Pratama", "umur" => 18, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551040", "nama" => "Anak Agung Ayu Saraswati", "umur" => 20, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551041", "nama" => "I Komang Yoga Saputra", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551042", "nama" => "Ni Made Citra Dewi", "umur" => 18, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551043", "nama" => "I Putu Arya Wijaya", "umur" => 20, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551044", "nama" => "Ni Kadek Sinta Maharani", "umur" => 19, "prodi" => "Teknologi Informasi"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
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
      width: 600px;
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
      text-align: center;
    }
    th {
      background: #5a2d82;
      color: #fff;
    }
    tr:nth-child(even) {
      background: #f9f6ff;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Data Mahasiswa</h2>
    <table>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Program Studi</th>
      </tr>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?php echo $mhs["nim"]; ?></td>
          <td><?php echo $mhs["nama"]; ?></td>
          <td><?php echo $mhs["umur"]; ?></td>
          <td><?php echo $mhs["prodi"]; ?></td>
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
