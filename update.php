<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];


$query = mysqli_query($conn,"UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', angkatan='$angkatan' WHERE id='$id'");

if($query){
  header("Location:admin.php?pesan=update");
}else{
  header("Location:admin.php?pesan=update");
}
?>
