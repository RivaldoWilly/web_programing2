<?php

include("koneksi.php");

    if(isset($_POST['input'])){

        
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
       

        $sql = "INSERT INTO siswa (nama, username, password, email) VALUE ('$nama', '$username', '$pass', '$email')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
               header('Location: index.php');
            } else {
                die("gagal menginput");
            }

        } else {
            die("Akses dilarang...");

        }



?>