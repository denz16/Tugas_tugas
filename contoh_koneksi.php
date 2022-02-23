<?php

// $nama_db #"dbunida_web";
// $query_db #"create_database $nama_db",
// $sambung mysql_connect("localhost","root","","dbunida_web");
// if($sambung){
//   // echo "coneksi berhasil<br>";
// }
// else {
//   echo "coneksi gagal<br>";
// }

// $query # mysql_query; ($sambung, $query_db),
// if($query){
//   echo "<br> db sukses dibuat";
// }
// else{
//   echo "<br> db gagal dibuat";
// }

$nama_db = 'dbunida_web';
$query_db = 'create_databases $nama_db';
//koneksi ke db dan memilih database apa
$sambung = mysqli_connect('localhost', 'root', '', 'dbunida_web');
if ($sambung) {
  echo "coneksi berhasil<br>";
} else {
  echo "coneksi gagal<br>";
}


//isi table database 
// $result = mysqli_query($conn, "SELECT * FROM buah_buahan");

//mengubah database ke dalam array
// while ($row = mysqli_fetch_assoc($result)) {
//     $rows[] = $row;
// }

//menampung ke dalam variabel
// $buah_buahan = $rows
