<?php

require 'functions.php';

$santri = query("SELECT * FROM latihanphp1");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<div class="container-fluid" style="background-color:purple;">
    <br>
    <h1 style="text-align:center;">DAFTAR NAMA SANTRI</h1>
    <br>
    <div class="container" style="background-color: white;" ><a href="tambah.php">Tambah Data Santri</a></div>
</div>
<br>
<div class="container" >
    <table class="table">
  <thead>
    <tr>
        
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">gender</th>
      <th scope="col">Email</th>
      <th scope="col">Gambar</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">

    <?php $i=1; ?>
    <?php foreach($santri as $row) : ?>

    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick = "return confirm('yakin');" >HAPUS</a>
      </td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td><?= $row["no hp"]; ?></td>
      <td><?= $row["gender"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    <!--<tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>-->
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>