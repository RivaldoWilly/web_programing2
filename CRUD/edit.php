<?php 
include ("koneksi.php"); 
$id = $_GET['id'];
$query = mysqli_query($db,"SELECT * FROM siswa where id='$id' ");
$siswa = mysqli_fetch_array($query);
?>

<!DOCTYPE>
<html>
<head>
    <title>Tugas WEB 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <header>
        <h1 align="center">Edit Data Siswa</h1>
    </header>

    <form action="proses-edit.php" method="POST">


            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"  required value="<?php echo $siswa['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required value="<?php echo $siswa['username'] ?>">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required value="<?php echo $siswa['password'] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required value="<?php echo $siswa['email'] ?>">
            </div>
              <button type="submit" class="btn btn-primary" name="Save">Save</button>



    </form>
</div>
    </body>
</html>