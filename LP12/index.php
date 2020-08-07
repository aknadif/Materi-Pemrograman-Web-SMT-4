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

<?php 
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "Data berhasil di input.";
    }elseif($pesan == "update"){
        echo "Data berhasil di update.";
    }elseif($pesan == "hapus"){
        echo "Data berhasil di hapus.";
    }
}
?>
<br/>
<a href="input.php" class="tombo;">+ Tambah Data Baru</a>

<h3>Data User</h3>
<table border="1" class="table">

<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Pekerjaan</th>
<th>Opsi</th>
</tr>

<?php 
include 'koneksi.php';
$query_mysql = mysqli_query($koneksi,"SELECT * FROM CRUD")or die(mysql_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
    ?>
<tr>
<td><?= $nomor++; ?></td>
<td><?= $data["nama"]; ?></td>
<td><?= $data["alamat"]; ?></td>
<td><?= $data["pekerjaan"]; ?></td>
<td>
<a href="edit.php?id=<?= $data["id"]; ?>" class="edit">Edit</a>
<a href="hapus.php?id=<?= $data["id"]; ?>" class="hapus">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

</body>
</html>