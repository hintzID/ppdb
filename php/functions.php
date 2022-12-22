<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","latihanphp");


function query($query) {

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
 
}


function tambah($data) {

    global $conn;

     //ambil data dari tiap elemen dari form
     $nama = htmlspecialchars($data["nama"]);
     $alamat = htmlspecialchars($data["alamat"]);
     $no_hp = htmlspecialchars($data["no_hp"]);
     $gender = htmlspecialchars($data["gender"]);
     $email = htmlspecialchars($data["email"]);
     $gambar = htmlspecialchars($data["gambar"]);

     //query insert data
    $query = "INSERT INTO latihanphp1 VALUES
    ('', '$nama', '$alamat', '$no_hp', '$gender', '$email', '$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
 
}


function hapus($id) {

    global $conn;

    mysqli_query($conn, "DELETE FROM latihanphp1 WHERE id = $id");

    return mysqli_affected_rows($conn);

}


function ubah($data) {

    global $conn;

    //ambil data dari tiap elemen dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $gender = htmlspecialchars($data["gender"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
   $query = "UPDATE latihanphp1 SET 
            `nama`= '$nama',
            `alamat` = '$alamat',
            `no hp` = '$no_hp',
            `gender` = '$gender',
            `email` = '$email',
            `gambar` = '$gambar'
             WHERE id = $id
   ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);

}


?>