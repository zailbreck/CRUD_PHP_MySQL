<?php

include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$gambar = $_POST['gambar'];

  $query = mysqli_query($conn,"INSERT INTO mahasiswa VALUES('','$nama','$nim','$jurusan','$angkatan','gambar')");
  if($query){
    header("Location:input.php?input=berhasil");
  }else{
    header("Location:input.php?input=gagal");
  }

 ?>
