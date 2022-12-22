<?php

require 'functions.php';

//cek ditekan tombol submit
if( isset($_POST["submit"]) ) {

   
 

    //cek keberhasilan
if( tambah($_POST) > 0 ) {
    echo "<script>
    alert ('ANDA SUDAH TERDAFTAR!');
    document.location.href = '/ppdb/index.html';
         </script>";
} else {
    echo "<script>
    alert ('MAAF DATA ANDA BELUM MASUK!');
    document.location.href = 'tambah.php';
         </script>";
}



    //var_dump(mysqli_affected_rows($conn)); die;


}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container bg-success" >
   <h1 style="text-align:center;">Tambah Data Santri</h1>
  </div>

<form action="" method="post">
   <div class="container">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Tulis Nama Anda" name="nama" required>
   </div>
   <br>

   <div class="container">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Tulis Alamat Anda" name="alamat" required>
   </div>
   <br>

   <div class="container">
    <label for="no hp" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" id="no hp" placeholder="Tulis Nomor HP Anda" name="no hp" required>
   </div>
   <br>

   
<div class="container">
    <label>Gender</label>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" value="Laki-laki" id="Laki-laki" required>
    <label class="form-check-label" for="Laki-laki">
    Laki-laki
    </label>
   </div>
   <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" value="Perempuan" id="Perempuan">
    <label class="form-check-label" for="Perempuan">
    Perempuan
    </label>
   </div>
</div>
<br>

   <div class="container">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Tulis Email Anda" name="email" required>
   </div>
   <br>

   <div class="container">
    <label for="gambar" class="form-label">gambar</label>
    <input type="text" class="form-control" id="gambar" placeholder="Tulis gambar Anda" name="gambar" required>
   </div>
   <br>

   <div class="container">
    <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
  </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>