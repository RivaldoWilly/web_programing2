<!DOCTYPE>
<html>
<head>
    <title>TUGAS WEB 2 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<body>
     <div class="container">
    <header>
        <h1 align="center">TAMBAH DATA SISWA</h1>
    </header>
   
    <form method="POST" action="proses-input.php">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required="">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="">
          </div>
          <button type="submit" class="btn btn-primary" name="input">Input</button>
    </form>
    </div>
 </body>
</html>