<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
   </head>
  <body>
    <nav class="navbar navbar-dark bg-primary mb-3">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </button>

      <a class="navbar-brand" href="#">Admin</a>
    </nav>

    <div class="container mb-5">
          <h3>Daftar Mahasiswa</h3>
          <br>
          <table class="table table-striped table-bordered" id="example" style="width:100%">
            <thead>
              <tr>
                <th style="text-align : center">No</th>
                <th style="text-align : center">Gambar</th>
                <th style="text-align : center">Nama</th>
                <th style="text-align : center">NIM</th>
                <th style="text-align : center">Email</th>
                <th style="text-align : center">Jurusan</th>
                <th style="text-align : center">Angkatan</th>
                <th style="text-align : center">AKSI</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn,"SELECT * FROM mahasiswa")or die(mysqli_error());
            $nomor =1 ;
            while ($d = mysqli_fetch_array($data)){
            ?>
             
                <tr>
                   <td style="text-align : center"><?= $nomor++ ?></td>
                   <td style="text-align : center"><img src="img/<?= $d['gambar']?>" style="width: 100px; height: 100px;"></td>
                   <td style="text-align : center"><?= $d['nama'] ?></td>
                   <td style="text-align : center"><?= $d['nim'] ?></td>
                   <td style="text-align : center"><?= $d['email']?></td>
                   <td style="text-align : center"><?= $d['jurusan'] ?></td>
                   <td style="text-align : center"><?= $d['angkatan'] ?></td>
                   <td>
                       <button type="button" name="button" class="btn btn-info"><a class="edit" href="edit.php?id=<?= $d['id'] ?>" style="color:black">Edit</a></button>
                       <button type="button" name="button" class="btn btn-danger"><a class="hapus"href="delete.php?id=<?= $d['id'] ?>" style="color:black">Delete</a></button>
                </tr>   
               
           <?php }?>
            </tbody>
          </table>
      <button type="button" name="button" class="btn btn-success"><a class="tombol" href="input.php" style="color: white">+ Tambah data Baru</a></button>
    </div>
    <?php 
    if (isset($_GET['pesan'])) {
      $pesan = $_GET['pesan'];
      if($pesan == "input"){
        ?>
        <script >alert('Data berhasil di input')</script>
      <?php  
      }else if($pesan == "update"){
       ?> 
        <script>alert('Data berhasil di ubah')</script>
       <?php
       }else if($pesan == "hapus"){
      ?>
          <script>alert('Data berhasil di delete')</script>
      <?php
       }
    } 
     ?>
  </body> 
  <script>
      $(document).ready(function(){
        $('#example').DataTable();
      });

    </script>
</html>