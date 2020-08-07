<?php 
include "config.php";

$sql = "SELECT * from user";
$query = mysqli_query($config,$sql);

echo "<pre>";
while ($row = mysqli_fetch_assoc($query)){
    print_r($row);
}
echo "<pre>";