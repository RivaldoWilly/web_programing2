
<!DOCTYPE>
<html>
<head>
    <title>TUGAS WEB 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 align="center">Daftar Siswa</h1>
        </header>

        <a href="tambah.php" class="btn btn-success">Tambah Baru</a>
        <br>
        

        <br>

        <table class="table table-striped" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Pasword</th>
                    <th>Email</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
            	<?php include("koneksi.php"); ?>

                <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                $nomer = 1;

                while($siswa = mysqli_fetch_array($query)){
                    
                
                ?>
                <tr>
                    <td><?php echo $nomer++ ?></td>
                    <td><?php echo$siswa['nama']; ?></td>
                    <td><?php echo$siswa['username']; ?></td>
                    <td><?php echo$siswa['password']; ?></td>
                    <td><?php echo$siswa['email']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $siswa['id']; ?>" class="btn btn-Primary">Edit</a>
                        <a href="proses-hapus.php?id=<?php echo $siswa['id']; ?>" class="btn btn-Danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</body>
</html>