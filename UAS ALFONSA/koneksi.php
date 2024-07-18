<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$dbName = "eshop";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $dbName);

if(!$conn){
    die("koneksi gagal");

}

?>