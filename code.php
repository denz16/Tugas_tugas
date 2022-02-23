<?php 
    //membuat koneksi
    $sambung=mysqli_connect("localhost","root","");
    if($sambung){
        echo "Koneksi Berhasil<br>";
    }else {
        echo "Koneksi Gagal<br>";
    }
