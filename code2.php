<?php 
    //membuat koneksi
    $nama_db ="dbunida_web";
    $query_db ="create database $nama_db";
    $sambung=mysqli_connect("localhost","root","");
    if($sambung){
        echo "Koneksi Berhasil<br>";
    }else {
        echo "Koneksi Gagal<br>";
    }
    // membuat database baru
    $query = mysqli_query($sambung,$query_db);
    if($query){
        echo "<br> db sukses dibuat";
    }else{
        echo "<br> db gagal dibuat";
    }
