<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_db = "pelajar";

$db = mysqli_connect($server, $user, $password, $nama_db);

if( !$db ){
    die("Gagal koneksi: " . mysqli_connect_error());
}

?>