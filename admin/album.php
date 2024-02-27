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
            <div class="card-header">Tambah Album </div>    
            <div class="class-body">
              <form action="../config/aksi-album.php" method="POST">
                  <label class="form-label">Nama Album</label>
                  <input type="text" name="namaalbum" class="form-control" required>
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" required></textarea>
                  <a href=""><button type="submit" class="btn btn-primary mt-2 " name="tambah">Tambah</button></a>
               </form>
            </div>            
         </div>
    </div>

    <div class="col-md-8">
      <div class="card mt-2">
        <div class="card-header">
          Data Album
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Album</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $userid = $_SESSION['userid'];
                $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE userid='$userid'");  
                while($data = mysqli_fetch_array($sql)){ 
                 ?>
                <tr>
                  <td><?php  echo $no++  ?></td>
                  <td><?php   echo $data['namaalbum'] ?></td>
                  <td><?php   echo $data['deskripsi'] ?></td>
                  <td><?php   echo $data['tanggalbuat'] ?></td>
                  <td>
                    <a href="edit-album.php?id=<?php echo $data['userid']; ?>"><button type=" button" class=" btn btn-warning"> Edit </button></a>
                    

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
<script type="text/javascript" src="../asset/js/jquery.js"></script>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>