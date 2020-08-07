<?php  
$config = mysqli_connect("localhost","nadif","nadif123","praktikum");
if (!$config){
    die('Gagal terhubung ke MySQL : '.mysqli_connect_error());
}