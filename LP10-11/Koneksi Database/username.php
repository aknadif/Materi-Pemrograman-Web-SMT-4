<?php  
include "config.php";

$sql = "SELECT * from user";
$querry = mysqli_query($config,$sql);
$row = mysqli_fetch_assoc($querry);

echo "<pre>";
print_r($row);
echo "<pre>";

echo "Username : " .$row['user_nama'] . "<br />";
echo "Nama : " .$row['user_namalengkap'] . "<br />";
echo "Email : " .$row['user_email'] . "<br />";