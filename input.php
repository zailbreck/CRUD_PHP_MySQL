<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Membuat CRUD Degan PHP</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron bg-info text-white">
      <div class="container container-fluid text-center">
        <h1 class="display-6">REGISTRASI MAHASISWA</h1>
        <p class="lead">Melakukan input data mahasiswa</p>
      </div>
    </div>


    <div class="col-lg-6">
      <form action="create.php" method="post">
        <div class="form-group col-md-4 col-md-offset-5 align-center">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-5 align-center">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" name="nim" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-5 align-center">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control" name="jurusan">
        </div>
        <div class="form-group col-md-4 col-md-offset-5 align-center">
              <label for="angkatan">Angkatan</label>
              <input type="text" class="form-control" name="angkatan">
        </div>
        <div class="form-group col-md-4 col-md-offset-5 align-center">
              <input type="Submit" name="input" value="Submit" class="btn btn-primary">
              <button type="button" class="btn btn-success"><a href="admin.php" style="color: white">Lihat Semua Data</a></button>
        </div>
      </form>
    </div>
  </body>
</html>

<?php
if (isset($_GET['input'])) {
    $pesan = $_GET['input'];
    if ($pesan == "berhasil") {
      echo "Data berhasil di input.";
    }else if($pesan == "gagal"){
      echo "Data Gagal di input.";
    }else if($pesan == "hapus"){
      echo "Data berhasil di hapus";
    }
}
 ?>
