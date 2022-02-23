<?php

// include ("contoh koneksi.php");

// $query_db1 # "create able tbdosen (dos_kode char(5) not null, dos_nama char(10), not null, int)";

// $qtb1 mysqli_query($sambung,$query_db1) or die(mysqli_error($sambung)),
// if($qtb1){
//   echo "<br>Tabel berhasil dibuat";
// }
// else{
//   echo "<br>Tabel gagal dibuat";
// }

include('contoh koneksi.php');
$query_db1 = 'create able tbdosen (dos_kode char(5) not null, dos_nama char(10), not null, int)';

$qtb1 = mysqli_query($sambung, $query_db1) or die(mysqli_error($sambung));

if ($qtb1) {
  echo "<br>Tabel berhasil dibuat";
} else {
  echo "<br>Tabel gagal dibuat";
}

//koneksi ke db dan memilih database apa
// $conn = mysqli_connect('localhost', 'root', '', 'buahseger');

//isi table database 
// $result = mysqli_query($conn, "SELECT * FROM buah_buahan");

//mengubah database ke dalam array
// while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
// }

//menampung ke dalam variabel
// $buah_buahan = $rows
