<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Membuat CRUD Dengan PHP dan MySQL</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron bg-info text-white">
      <div class="container container-fluid text-center">
        <h1 class="display-6">=======================</h1>
        <h1 class="display-6">~ Edit Data Mahasiswa ~</h1>
        <h1 class="display-6">=======================</h1>
        <p class="lead">Mengubah Data Mahasiswa</p>
      </div>
    </div>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query_mysql = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'") or die(mysql_error());
    while($d = mysqli_fetch_array($query_mysql)){
     ?>

     <div class="col-lg-6">
       <form action="update.php" method="post">
         <div class="form-group col-md-4 col-md-offset-5 align-center">
           <label for="nama">Nama</label>
           <input type="hidden" name="id" value="<?= $d['id'];?>">
           <input type="text" class="form-control" name="nama" value="<?=$d['nama'];?>">
         </div>
         <div class="form-group col-md-4 col-md-offset-5 align-center">
               <label for="nim">NIM</label>
               <input type="text" class="form-control" name="nim" value="<?= $d['nim'];?>">
         </div>
         <div class="form-group col-md-4 col-md-offset-5 align-center">
               <label for="email">Email</label>
               <input type="text" class="form-control" name="email" value="<?= $d['email'];?>">
         </div>
         <div class="form-group col-md-4 col-md-offset-5 align-center">
               <label for="jurusan">Jurusan</label>
               <input type="text" class="form-control" name="jurusan" value="<?= $d['jurusan'];?>">
         </div>
         <div class="form-group col-md-4 col-md-offset-5 align-center">
               <label for="angkatan">Angkatan</label>
               <input type="text" class="form-control" name="angkatan" value="<?= $d['angkatan'];?>">
         </div>
         <div class="form-group col-md-4 col-md-offset-5 align-center">
               <input type="submit" name="edit" value="Save" class="btn btn-primary">
               <button type="button" class="btn btn-success"><a href="admin.php" style="color: white">Lihat Semua Data</a></button>
         </div>
       </form>
     </div>
   <?php } ?>
  </body>
</html>
