<?php

include("koneksi.php");

if(isset($_POST['Save'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $sql = "UPDATE siswa SET nama='$nama', username='$username', password='$pass', email='$email' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>