<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = '$id'") or die (mysql_error());

if($query){
  header("Location:admin.php?pesan=hapus");
}else{
  header("Location:admin.php?pesan = Gagal Hapus Data");
}
 ?>
