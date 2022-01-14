<?php

include("index.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST)){
    // ambil data dari register
    $username = $_POST['username'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // buat query
    $sql = "INSERT INTO pengguna1 (username, nim, alamat, password) VALUE ('$username', '$nim', '$alamat', '$hashed_password')";


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}