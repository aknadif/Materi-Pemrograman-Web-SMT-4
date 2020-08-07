<?php  
$config = mysqli_connect("localhost","nadif","nadif123","praktikum");
if (!$config){
    die('Koneksi database gagal : '.mysqli_connect_error());
}