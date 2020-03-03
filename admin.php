<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menampilkan data dari DB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron bg-info text-white">
      <div class="container container-fluid text-center">
        <h1 class="display-6">================</h1>
        <h1 class="display-6">~ PORTAL ADMIN ~</h1>
        <h1 class="display-6">================</h1>
        <p class="lead">Menampilkan Data Mahasiswa</p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3>Daftar Mahasiswa</h3>
          <br>
          <table border="1" class="table">
            <tr>
              <th style="text-align : center">No</th>
              <th style="text-align : center">Gambar</th>
              <th style="text-align : center">Nama</th>
              <th style="text-align : center">NIM</th>
              <th style="text-align : center">Jurusan</th>
              <th style="text-align : center">Angkatan</th>
              <th style="text-align : center">AKSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $data = mysqli_query($conn,"SELECT * FROM mahasiswa")or die(mysqli_error());
            $nomor =1 ;
            $da = mysqli_fetch_array($data);

            foreach($da as $d){
            ?>
             <tr>
               <td style="text-align : center"><?= $nomor++ ?></td>
               <td style="text-align : center"><img src="img/<?= $d['gambar']?>"></td>
               <td style="text-align : center"><?= $d['nama'] ?></td>
               <td style="text-align : center"><?= $d['nim'] ?></td>
               <td style="text-align : center"><?= $d['jurusan'] ?></td>
               <td style="text-align : center"><?= $d['angkatan'] ?></td>
               <td>
                   <button type="button" name="button" class="btn btn-outline-warning"><a class="edit" href="edit.php?id=<?= $data['id'] ?>" style="color:black">Edit</a></button>
                   <button type="button" name="button" class="btn btn-outline-danger"><a class="hapus"href="delete.php?id=<?= $data['id'] ?>" style="color:black">Delete</a></button>
               </td>
             </tr>
           <?php } ?>
          </table>
        </div>
      </div>
      <button type="button" name="button" class="btn btn-success"><a class="tombol" href="input.php" style="color: white">+ Tambah data Baru</a></button>
    </div>
    <?php 
    if (isset($_GET['pesan'])) {
      $pesan = $_GET['pesan'];
      if($pesan == "input"){
        echo "Data berhasil di input.";
      }else if($pesan == "update"){
        echo "Data Berhasil di ubah";
       }else if($pesan == "hapus"){
         echo "Data berhasil di hapus";
       }
    } 
     ?>
  </body> 
</html>