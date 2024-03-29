<?php 	
session_start();
include'../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
	echo "<script>
        alert('Anda belum login!');
        document.location.href = '../index.php';
        </script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
         <a href="home.php" class="nav-link">Home</a>
      	<a href="album.php" class="nav-link">Album</a>
        <a href="foto.php" class="nav-link">Foto</a>
      </div>
       <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>

<div class="container">
<div class="row"> 
    <div class="col-md-4">
        <div class="card mt-2">
            <div class="card-header">Tambah Foto </div>    
            <div class="class-body">
              <form action="../config/aksi-foto.php" method="POST" enctype="multipart/form-data">
                  <label class="form-label">Judul Foto</label>
                  <input type="text" name="judulfoto" class="form-control" required>
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsifoto" required></textarea>
                  <label class="form-label">Album</label>
                  <select class="form-control" name="albumid" required>
                    <?php   
                        $sql_album = mysqli_query($koneksi, "SELECT * FROM album");
                        while($data_album = mysqli_fetch_array($sql_album)){ ?>
                            <option value="<?php  echo $data_album['albumid'] ?>"> <?php  echo $data_album['namaalbum'] ?> </option>
                       <?php  } ?>
                  </select>
                  <label class="form-label">File</label>
                  <input  class="form-control" type="file" name="lokasifile" required>
                  <button type="submit" class="btn btn-primary mt-2 " name="tambah">Tambah Foto</button>
               </form>
            </div>            
         </div>
    </div>

    <div class="col-md-8">
      <div class="card mt-2">
        <div class="card-header">
          Data Galeri foto
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>  Foto</th>
                  <th>Judul foto</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $userid = $_SESSION['userid'];
                $sql = mysqli_query($koneksi, "SELECT * FROM foto WHERE userid='$userid'");  
                while($data = mysqli_fetch_array($sql)){ 
                 ?>
                <tr>
                  <td><?php  echo $no++  ?></td>
                  <td>  <img src="../asset/img/<?php  echo $data['lokasifile'] ?>" width="100"></td>
                  <td><?php   echo $data['judulfoto'] ?></td>
                  <td><?php   echo $data['deskripsifoto'] ?></td>
                  <td><?php   echo $data['tanggalunggah'] ?></td>
                  <td>
                    
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['albumid']?>">
  Edit
</button>


<div class="modal fade" id="edit<?php echo $data['albumid']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit album</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../config/aksi-album.php" method="POST">
          <input type="hidden" name="albumid" value=" <?php echo $data['albumid'] ?>"> 
           <label class="form-label">Nama Album</label>
                  <input type="text" name="namaalbum" value=" <?php   echo $data['namaalbum'] ?>" class="form-control" required>
                  <label class="form-label" >Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" required><?php   echo $data['deskripsi']; ?></textarea>
        
      </div>
      <div class="modal-footer">a
        <button type="submit" name class="btn btn-primary">Edit data</button>
        </form>
      </div>
    </div>
  </div>
</div>
                  </td>
                </tr>
              <?php   } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>

</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website | By: Dzaki</p>
</footer>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>