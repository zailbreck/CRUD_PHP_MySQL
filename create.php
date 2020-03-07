<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$gambar = upload();

	if(!$gambar){
		return false;
	}

  $query = mysqli_query($conn,"INSERT INTO mahasiswa VALUES('','$nama','$nim','$email','$jurusan','$angkatan','$gambar')");
  if($query){
    header("Location:input.php?input=berhasil");
  }else{
    header("Location:input.php?input=gagal");
  }

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$errorFile =  $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah gambar telah di upload
	if($errorFile === 4){
		echo "<script> alert('Pilih gambar terlebih dahulu'); </script>";
		return false;
	}

	// cek apakah yang di upload adalah gambar
	$ekstensi = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensi)){
		echo "<script> alert('yang anda upload bukan gambar'); </script>";
		return false;

	}

	//cek jika ukuran terlalu besar 
	if( $ukuranFile > 1000000){
		echo "<script> alert('Ukuran gambar terlalu besar'); </script>";
		return false;

	}

	// lolos pengecekan
	move_uploaded_file($tmpName, 'img/'. $namaFile);

	return $namaFile;

}


 ?>
