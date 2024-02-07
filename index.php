<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href='asset/css/bootstrap.min.css'>
        <title>Haldin Kriptografi</title>
    </head>
    <?php
include "koneksi.php";
session_start();
$error="";
if(isset($_POST['login'])){
  if (empty($_POST['nama_pegawai']|| $_POST['password'])){
  $error='masukan kata sandi dan nama ';
  }else{
        $user=mysqli_real_escape_string($con,$_POST['nama_pegawai']);
        $pass=mysqli_real_escape_string($con,$_POST['password']);

        $query="SELECT * FROM pegawai WHERE 
        nama_pegawai='$user'";
        $sql=$con -> query($query);
        if (mysqli_num_rows($sql) === 1) {
          $row = mysqli_fetch_assoc($sql);
                if ($row['nama_pegawai'] === $user && $row['password'] === $pass) {
                  header("Location:dashboard.php");
                exit();
                }  
              }  
              }
  }
  ?>

    <body>
        
            <h1>Kritografi AES (Advanced Encryption Standard</h1>
            <h2>Halaman Login</h2>
            <form method="POST" action='#' >
            <input type= "text" placeholder="Masukn Nama" name="nama_pegawai" ></input>
            <br>
            <input type="password" placeholder=" Masukan password" name="password" ></input>
            <br>
            <input type='submit' id='submit' name="login" value='LOgIn'></button>
        <script src='asset/js/bootstrap.bundle.ss'></script>
            </form>
    </body>
</html>