<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
    <h2>Login</h2>
    <br/>
<!-- Cek Pesan Notifikasi -->
<?php 

if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal !! Username dan Password salah!";
    }else if($_GET['pesan'] == "logout"){echo "Anda telah berhasil logout";
    }elseif($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
<br/>
<br/>
<form action="cek_login.php" method="post">
<table>

<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username" placeholder="Masukkan Username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="text" name="password" placeholder="Masukkan Password"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="LOGIN"></td>
</tr>
</table>
</form>
</body>
</html>