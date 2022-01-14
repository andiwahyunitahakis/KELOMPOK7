<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kelas_a1";

$db = mysqli_connect($server, $user, $password,$alamat, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>