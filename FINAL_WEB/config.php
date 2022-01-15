<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kelas_a1";

$db = mysqli_connect($server, $user, $password,$alamat, $nama_database);

if( !$db ){
    die("Gagal Terhubung Dengan Database: " . mysqli_connect_error());
}

?>
