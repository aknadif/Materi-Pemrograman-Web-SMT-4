<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD Dengan PHP dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text" href="style.css">
</head>
<body>
    <div class="judul">
    <h1>Membuat CRUD Dengan PHP dan MySQL</h1>
    <h2>Menampilkan data dari database</h2>
    </div>
<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Input Data Baru</h3>
<form action="input-aksi.php" method="post">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="simpan"></td>
</tr>
</table>
</form>
</body>
</html>